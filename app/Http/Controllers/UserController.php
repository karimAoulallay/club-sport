<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    // Show register form
    public function register()
    {
        $plans = DB::table('plans')->where('id', '!=', 1)->get();
        return view('users.register', ['plans' => $plans]);
    }

    // Store user data
    public function store(Request $request)
    {
        // Getting all form values
        $formFields = $request->validate([
            'plan_id' => ['required'],
            'first_name' => ['required', 'alpha'],
            'last_name' => ['required', 'alpha'],
            'gender' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required', 'digits:10', Rule::unique('users', 'phone')],
            'password' => 'required|confirmed|min:6',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        if ($request->hasFile('profile_image')) {
            $formFields['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Your account has been created!');
    }

    // Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }


    // Show login form
    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin === 1) {
                return redirect('/admin/dashboard');
            }
            return redirect('/users/' . auth()->user()->id . '/profile');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show profile
    public function profile(User $user)
    {
        $plan = DB::table('plans')->where('id', $user->plan_id)->first();

        return view('users.profile', [
            'user' => $user,
            'plan' => $plan,
        ]);
    }

    // Show user edit 
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    // Update user data
    public function update(Request $request, User $user)
    {

        // Getting all form values
        $formFields = $request->validate([
            'first_name' => ['required', 'alpha'],
            'last_name' => ['required', 'alpha'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits:10'],
            'password' => 'required|confirmed|min:6',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        if ($request->hasFile('profile_image')) {
            $formFields['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Update user
        $user->update($formFields);

        return back()->with('message', 'Profile updated successfully');
    }
}

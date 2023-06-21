<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        return view('admin.members.index', ['users' => User::latest()->where('is_admin', '!=', 1)->paginate(5)]);
    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect('/admin/dashboard/members');
    }
}

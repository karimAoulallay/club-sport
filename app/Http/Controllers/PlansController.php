<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PlansController extends Controller
{
    public function index()
    {
        $plans = DB::table('plans')
            ->where('id', '!=', 1)
            ->get();
        return view('admin.plans.index', ['plans' => $plans]);
    }

    public function create()
    {
        return view('admin.plans.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'max:15', Rule::unique('plans', 'name')],
            'duration' => ['required'],
            'price' => ['required'],
        ]);

        Plan::create($formFields);
        return redirect("admin/dashboard/plans");
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect('admin/dashboard/plans');
    }

    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', ['plan' => $plan]);
    }

    public function update(Plan $plan, Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'max:15'],
            'duration' => ['required'],
            'price' => ['required'],
        ]);

        $plan->update($formFields);
        return redirect('admin/dashboard/plans');
    }
}

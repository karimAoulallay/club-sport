<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index', [
            'members' => User::all(),
            'plans' => Plan::all(),
            'activities' => Activity::all(),
            'recentMembers' => User::latest()->where('is_admin', '!=', 1)->limit(3)->get(),
            'recentActivity' => Activity::latest()->first(),
            'recentPlan' => Plan::latest()->where('id', '!=', 1)->first(),
        ]);
    }
}

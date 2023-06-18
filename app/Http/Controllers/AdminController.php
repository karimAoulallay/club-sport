<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Plan;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index', [
            'users' => User::latest()->where('id', '!=', 1)->limit(3)->get(),
            'plans' => Plan::all(),
            'members' => User::all(),
            'activities' => Activity::all(),
        ]);
    }
}

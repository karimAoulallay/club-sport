<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Plan;

class StaticController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('pages.activities', ['activities' => $activities]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function plans()
    {
        $plans = Plan::latest()->where('id', '<>', 1)->get();
        return view('pages.plans', ['plans' => $plans]);
    }
}

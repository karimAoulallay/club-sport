<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activities.index', ['activities' => $activities]);
    }

    public function create()
    {
        return view('admin.activities.create');
    }

    public function store(Request $request)
    {

        // Getting all form values
        $formFields = $request->validate([
            'name' => ['required', 'alpha'],
            'description' => ['required', 'min:12'],
        ]);

        if ($request->hasFile('activity_image')) {
            $formFields['activity_image'] = $request->file('activity_image')->store('activity_images', 'public');
        }

        // Create activity
        Activity::create($formFields);

        return redirect("/admin/dashboard/activities");
    }

    // Show Edit Activity Form
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('admin.activities.edit', ['activity' => $activity]);
    }

    // Update Activity
    public  function update($id, Request $request)
    {

        $activity = Activity::findOrFail($id);

        $formFields = $request->validate([
            'name' => ['required', 'alpha'],
            'description' => ['required', 'min:12'],
        ]);

        if ($request->hasFile('activity_image')) {
            $formFields['activity_image'] = $request->file('activity_image')->store('activity_images', 'public');
        }

        if ($request->hasFile('profile_image')) {
            $formFields['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Update user
        $activity->update($formFields);

        return redirect('/admin/dashboard/activities');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect('/admin/dashboard/activities');
    }
}

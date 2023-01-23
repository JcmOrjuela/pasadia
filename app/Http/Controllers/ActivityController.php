<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{


    public function index()
    {
        $activities = Activity::with(['moreActivity'])->get();

        return view('dashboard', ['activities' => $activities]);
    }

    public function show($id)
    {
        $activity = Activity::with(['images', 'morActivity'])->find($id);

        return view('activity', [
            "activity" => $activity
        ]);
    }

    public function destroy($id)
    {
        Activity::where('id', $id)->delete();

        return redirect('activities');
    }
}

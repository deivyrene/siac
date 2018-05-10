<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\Activity;
use Siac\Http\Requests\ActivityRequest;

class ActivityController extends Controller
{
    public function index(){

        $activities = Activity::orderBy('id','DESC')->paginate(10);
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(ActivityRequest $request)
    {
        $activity = new Activity;

        $activity->nameActivity  = $request->nameActivity;
        $activity->shortActivity = $request->shortActivity;
        
        $activity->save();

        return redirect()->route('activities.index')->with('info','La actividad ha sido registrada');
    }

    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activities.edit', compact('activity'));
    }

    public function update(ActivityRequest $request, $id)
    {
        $activity = Activity::find($id);

        $activity->nameActivity  = $request->nameActivity;
        $activity->shortActivity = $request->shortActivity;
        
        $activity->save();

        return redirect()->route('activities.index')->with('info','La actividad ha sido actualizada');
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        return view('activities.show', compact('activity'));
    }

    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();

        return back()->with('info','La actividad fue eliminada');
    }
}

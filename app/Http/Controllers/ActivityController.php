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
        return 'producto guardado';
    }

    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activities.edit', compact('activity'));
    }

    public function update(ActivityRequest $request, $id)
    {
        return 'producto editado';
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

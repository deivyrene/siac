<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\Activity;
use Siac\Http\Requests\ActivityRequest;

use Yajra\Datatables\Datatables;
use Yajra\DataTables\Services\DataTable;

class ActivityController extends Controller
{
    public function index(){

        return view('activities.index', compact('activities'));
    }

    public function getActivity()
    {
        $activities = Activity::orderBy('id','DESC');
 
        return Datatables::of($activities)->addColumn('action', function ($user) {
            return '<a href="http://www.sipcom.cl/siac/activities/'.$user->id.'" class="btn btn-sm btn-success"><i class="material-icons">pageview</i></a>
                    <a href="http://www.sipcom.cl/siac/activities/'.$user->id.'/edit" class="btn btn-sm btn-info"><i class="material-icons">border_color</i></a>
                    <a href="#" onclick="destroyActivity('.$user->id.')" class="btn btn-sm btn-warning"><i class="material-icons">delete_forever</i></a>';
        })->make(true);
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

    public function destroyActivity(request $request)
    {
        if($request->ajax()){
            $activity = Activity::find($request->id);
            $activity->delete();

            return "La actividad ha sido eliminada";
        }
    }
}

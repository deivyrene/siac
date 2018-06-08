<?php

namespace Siac\Http\Controllers;
use Siac\Consultant;
use Siac\Http\Requests\ConsultantRequest;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Yajra\DataTables\Services\DataTable;

class ConsultantController extends Controller
{
    public function index(){

       // $consultants = Consultant::orderBy('id','DESC')->paginate(5);
        return view('consultants.index');
    }

    public function getConsultant()
    {
        $consultants = Consultant::select(['id','nameConsultant','positionConsultant','fonoConsultant','emailConsultant']);
 
        return Datatables::of($consultants)->addColumn('action', function ($user) {
            return '<a href="http://www.sipcom.cl/siac/consultants/'.$user->id.'" class="btn btn-sm btn-success"><i class="material-icons">pageview</i></a>
                    <a href="http://www.sipcom.cl/siac/consultants/'.$user->id.'/edit" class="btn btn-sm btn-info"><i class="material-icons">border_color</i></a>
                    <a href="#" onclick="destroyConsultant('.$user->id.')" class="btn btn-sm btn-warning"><i class="material-icons">delete_forever</i></a>';
        })->make(true);
    }

    public function create()
    {
        return view('consultants.create');
    }
    public function store(ConsultantRequest $request)
    {
        $consultant = new Consultant;

        $consultant->nameConsultant     = $request->nameConsultant;
        $consultant->positionConsultant = $request->positionConsultant;
        $consultant->fonoConsultant     = $request->fonoConsultant;
        $consultant->emailConsultant    = $request->emailConsultant;

        $consultant->save();

        return redirect()->route('consultants.index')->with('info','El consultor se ha registrado');
    }
    public function edit($id)
    {
        $consultant = Consultant::find($id);

        return view('consultants.edit', compact('consultant'));

    }
    public function update(ConsultantRequest $request, $id)
    {
        $consultant = Consultant::find($id);

        $consultant->nameConsultant     = $request->nameConsultant;
        $consultant->positionConsultant = $request->positionConsultant;
        $consultant->fonoConsultant     = $request->fonoConsultant;
        $consultant->emailConsultant    = $request->emailConsultant;

        $consultant->save();

        return redirect()->route('consultants.index')->with('info','El consultor ha sido editado');
    }
    public function destroyConsultant(request $request)
    {
        if($request->ajax()){

            $consultant = Consultant::find($request->id);
            $consultant->delete();

            return "El consultor ha sido eliminado";
        }
    }
    public function show($id)
    {
        $consultant = Consultant::find($id);

        return view('consultants.show', compact('consultant'));
    }
}

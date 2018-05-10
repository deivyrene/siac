<?php

namespace Siac\Http\Controllers;
use Siac\Consultant;
use Siac\Http\Requests\ConsultantRequest;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function index(){

        $consultants = Consultant::orderBy('id','DESC')->paginate(10);
        return view('consultants.index', compact('consultants'));
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
    public function destroy($id)
    {
        $consultant = Consultant::find($id);
        $consultant->delete();

        return back()->with('info', 'El consultor ha sido eliminado');
    }
    public function show($id)
    {
        $consultant = Consultant::find($id);

        return view('consultants.show', compact('consultant'));
    }
}

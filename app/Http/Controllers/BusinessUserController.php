<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Siac\BusinessUser;
use Siac\Company;
use Siac\Http\Requests\BusinessUserRequest;

class BusinessUserController extends Controller
{
    public function index(){

        
        $businessusers = BusinessUser::OrderBy('id','asc')->with(['relationCompany' => function($query){
                        $query->select('id','nameCompany');
        }])->get();
         
        return view('businessusers.index', compact('businessusers'));
    }

    public function create(){

        $companies = Company::all(['id', 'nameCompany']);

        return view('businessusers.create', compact('companies'));
    }

    public function store(BusinessUserRequest $request){

        $businessuser = new BusinessUser;

        $businessuser->nameBusinessUser = $request->nameBusinessUser;
        $businessuser->fonoBusinessUser = $request->fonoBusinessUser;
        $businessuser->emailBusinessUser = $request->emailBusinessUser;
        $businessuser->idCompanies = $request->idCompanies;

        $businessuser->save();

        return redirect()->route('businessusers.index')->with('info','Se ha registrado con éxito');

    }

    public function edit($id){

        $businessuser = BusinessUser::find($id);
        $companies = Company::all(['id', 'nameCompany']);
        return view('businessusers.edit', compact('businessuser','companies'));
       
    }

    public function update(BusinessUserRequest $request, $id){

        $businessuser = BusinessUser::find($id);

        $businessuser->nameBusinessUser = $request->nameBusinessUser;
        $businessuser->fonoBusinessUser = $request->fonoBusinessUser;
        $businessuser->emailBusinessUser = $request->emailBusinessUser;
        $businessuser->idCompanies = $request->idCompanies;

        $businessuser->saved();

        return redirect()->route('businessusers.index')->with('info','Se ha editado exitosamente');

    }

    public function getTasks()
    {
        $businessuser = BusinessUser::select(['id','nameBusinessUser','fonoBusinessUser','emailBusinessUser','idCompanies']);
 
        return Datatables::of($businessuser)->make(true);
    }
}

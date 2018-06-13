<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\BusinessUser;
use Siac\Company;
use Siac\Http\Requests\BusinessUserRequest;

use Yajra\Datatables\Datatables;
use Yajra\DataTables\Services\DataTable;

class BusinessUserController extends Controller
{
    public function index(){

        return view('businessusers.index', compact('businessusers'));
    }

    public function getUserCompany()
    {
        
        $businessusers = BusinessUser::with(['companies' => function($query){
                                                $query->select('id','nameCompany');
                                            }])->orderBy('id', 'asc');
        
        return Datatables::of($businessusers)->addColumn('action', function ($user) {
            return '<a href="http://www.sipcom.cl/siac/businessusers/'.$user->id.'" class="btn btn-sm btn-success"><i class="material-icons">pageview</i></a>
                    <a href="http://www.sipcom.cl/siac/businessusers/'.$user->id.'/edit" class="btn btn-sm btn-info"><i class="material-icons">border_color</i></a>
                    <a href="#" onclick="destroyUserCompany('.$user->id.')" class="btn btn-sm btn-warning"><i class="material-icons">delete_forever</i></a>';
        })->make(true);
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

        $businessuser->save();

        return redirect()->route('businessusers.index')->with('info','Se ha editado exitosamente');

    }

    public function show($id){

        $businessuser = BusinessUser::find($id);
        
    }

    public function destroyUserCompany(request $request){

        if($request->ajax())
        {
            $businessuser = BusinessUser::find($request->id);

            $businessuser->delete();

            return 'Se ha eliminado el usuario de empresa';
        }
        
    }

    public function getTasks()
    {
        $businessuser = BusinessUser::select(['id','nameBusinessUser','fonoBusinessUser','emailBusinessUser','idCompanies']);
 
        return Datatables::of($businessuser)->make(true);
    }
}

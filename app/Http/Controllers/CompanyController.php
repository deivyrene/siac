<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\Company;
use Siac\Http\Requests\CompanyRequest;

use Yajra\Datatables\Datatables;
use Yajra\DataTables\Services\DataTable;

class CompanyController extends Controller
{
    public function index(){

        //$companies = Company::orderBy('id','DESC')->paginate(5);

        return view('companies.index', compact('companies'));
    }

    public function getCompany()
    {
        $companies = Company::orderBy('id','DESC');
 
        return Datatables::of($companies)->addColumn('action', function ($user) {
            return '<a href="http://www.sipcom.cl/siac/companies/'.$user->id.'" class="btn btn-sm btn-success"><i class="material-icons">pageview</i></a>
                    <a href="http://www.sipcom.cl/siac/companies/'.$user->id.'/edit" class="btn btn-sm btn-info"><i class="material-icons">border_color</i></a>
                    <a href="#" onclick="destroyCompany('.$user->id.')" class="btn btn-sm btn-warning"><i class="material-icons">delete_forever</i></a>';
        })->make(true);
    }

    public function create(){

        return view('companies.create');
    }

    public function store(CompanyRequest $request){

        $company = new Company;

        $company->nameCompany = $request->nameCompany;
        $company->attendantCompany = $request->attendantCompany;
        $company->addressCompany = $request->addressCompany;
        $company->fonoCompanyA = $request->fonoCompanyA;
        $company->fonoCompanyB = $request->fonoCompanyB;
        $company->fonoCompanyC = $request->fonoCompanyC;
        $company->emailCompany = $request->emailCompany;

        $company->save();

        return redirect()->route('companies.index')->with('info', 'La empresa se ha registrado');
    }

    public function edit($id){

        $companies = Company::find($id);

        return view('companies.edit', compact('companies'));

    }

    public function update(CompanyRequest $request, $id){

        $company = Company::find($id);

        $company->nameCompany = $request->nameCompany;
        $company->attendantCompany = $request->attendantCompany;
        $company->addressCompany = $request->addressCompany;
        $company->fonoCompanyA = $request->fonoCompanyA;
        $company->fonoCompanyB = $request->fonoCompanyB;
        $company->fonoCompanyC = $request->fonoCompanyC;
        $company->emailCompany = $request->emailCompany;

        $company->save();

        return redirect()->route('companies.index')->with('info', 'La empresa se ha editado');
    }

    public function destroyCompany(request $request){

        if($request->ajax()){

            $company = Company::find($request->id);
            $company->delete();

            return 'La empresa ha sido eliminada';
        }
    }

    public function show($id){

        $companies = Company::find($id);

        return view('companies.show', compact('companies'));
    }
}

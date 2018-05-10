<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\Company;
use Siac\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index(){

        $companies = Company::orderBy('id','DESC')->paginate(10);

        return view('companies.index', compact('companies'));
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

    public function destroy($id){

        $company = Company::find($id);
        $company->delete();

        return back()->with('info', 'Se ha eliminado el registro');
    }

    public function show($id){

        $companies = Company::find($id);

        return view('companies.show', compact('companies'));
    }
}

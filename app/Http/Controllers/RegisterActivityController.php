<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;
use Siac\Activity;
use Siac\Company;
use Siac\BusinessUser;
use Siac\Consultant;
use Siac\RegisterActivity;


class RegisterActivityController extends Controller
{
    public function index(){
        $registeractivities = RegisterActivity::OrderBy('id','asc')
            ->with([
                'companies' => function($query) {
                    $query->select('id','nameCompany');
                },
                'activities' => function($query) {
                    $query->select('id','nameActivity');
                },
                'consultants' => function($query) {
                    $query->select('id','nameConsultant');
                },
                'businessuser'
                  => function($query) {
                     $query->select('id','nameBusinessUser');
                 }     
             ])->paginate(10);
            
        return view('registeractivities.index', compact('registeractivities'));
    }

    public function create(){

        $consultants = Consultant::all(['id','nameConsultant']);
        $activities = Activity::all(['id','nameActivity']);
        $companies = Company::all(['id','nameCompany']);
        $businessUsers = BusinessUser::all(['id','nameBusinessUser']);

        
        return view('registeractivities.create', compact('consultant','activity','company','businessUser'));
    }

    public function store(BusinessUserRequest $request){

       
    }

    public function edit($id){
       
        
    }

    public function update(BusinessUserRequest $request, $id){

        
    }

}

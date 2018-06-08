<?php

namespace Siac\Http\Controllers;

use Illuminate\Http\Request;

use Siac\Company;
use Siac\BusinessUser;
use Siac\Consultant;
use Siac\RegisterActivity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countCompany = Company::all()->count();
        $countUser = BusinessUser::all()->count();
        $countConsultant = Consultant::all()->count();
        $countActivity = RegisterActivity::all()->count();

        $lastUser = BusinessUser::orderby('created_at','DESC')->take(3)->get();

        $lastActivity = RegisterActivity::OrderBy('created_at','desc')
                                        ->with([
                                                'companies' => function($query) {
                                                    $query->select('id','nameCompany');
                                                },
                                                'consultants' => function($query) {
                                                    $query->select('id','nameConsultant');
                                                }
                                        ])->groupBy('codActivity')->take(3)->get();

        return view('index', compact('countCompany', 'countUser', 'countConsultant', 'countActivity', 'lastUser', 'lastActivity'));
    }
}

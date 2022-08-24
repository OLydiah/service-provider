<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function rerouters()
    {
        $userGroup=Auth::user()->isAdmin;
        if($userGroup=='1'){
           return view('home'); 
        }
        elseif($userGroup=='0'){
            return view('service.browse-talent'); 
         }
        else{
            return view('index');
        }
        
    }
}

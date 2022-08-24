<?php

namespace App\Http\Controllers;

use App\Models\tbl_services;
use App\Models\service_request_tbl;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cliLogin()
    {
        $getData = tbl_services::all();
        return view('login', compact('getData'));
    }

    public function pendingApproval()
    {
        $getData = service_request_tbl::select('*')
            ->where([
                ['isAdminApproved', '=', 0]
            ])->get();
        return view('admin.pendingApproval', compact('getData'));
    }
    
    public function approved()
    {   
        $getData = service_request_tbl::select('*')
            ->where([
                ['isAdminApproved', '=', 1]
            ])->get();
        return view('admin.approved', compact('getData'));
    }
    
    public function homePage(){
        $getData = tbl_services::all();
        return view('index', compact('getData'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_services  $tbl_services
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_services $tbl_services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_services  $tbl_services
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_services $tbl_services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_services  $tbl_services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_services $tbl_services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_services  $tbl_services
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_services $tbl_services)
    {
        //
    }

    public function inputArrayToString(Request $request){
        $string = implode(',', $request->email);
    }
}

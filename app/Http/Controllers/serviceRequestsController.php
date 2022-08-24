<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\service_request_tbl;
use App\Models\tbl_services;

class serviceRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servRequest()
    {
        return view ('service.servRequest');
    }

    public function browse(){
        $getData = tbl_services::all();
        return view('service.browse-talent', compact('getData'));
    }
    
    public function index()
    {
        $getservices = service_request_tbl::orderBy('id','desc')->paginate(5);
        return view('service.browse-talent', compact('getservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $getData = tbl_services::all();
        return view('service.servRequest', compact('getData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addService(Request $request, $id)
    {
      if (Auth::id()){
        $user=auth()->user();
        $services=tbl_services::find($id);

        $cart=new service_request_tbl;

        $cart->username=$user->name;
        $cart->phoneno=$user->phoneno;
        $cart->email=$user->email;
        $cart->service=$services->name;
        $cart->serviceID=$services->id;
        $cart->save();

        return redirect()->back()->with('message','Service successfully Requested!');
      } 
      else{
        return redirect('login');
      } 
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service_request_tbl  $service_request_tbl
     * @return \Illuminate\Http\Response
     */
    public function show(service_request_tbl $service_request_tbl)
    {
        return view('admin.pendingApproval',compact('getservices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service_request_tbl  $service_request_tbl
     * @return \Illuminate\Http\Response
     */
    public function edit(service_request_tbl $service_request_tbl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service_request_tbl  $service_request_tbl
     * @return \Illuminate\Http\Response
     */
    public function approveService($id)
    {
        $serviceRequest=service_request_tbl::find($id);
        $serviceRequest->isAdminApproved=1;
        $serviceRequest->save();
        return redirect()->back();
    }

    public function update(Request $request, service_request_tbl $service_request_tbl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service_request_tbl  $service_request_tbl
     * @return \Illuminate\Http\Response
     */
    public function destroy(service_request_tbl $service_request_tbl)
    {
        $service_request_tbl->delete();
        return redirect()->route('admin.pendingApproval')->with('success','Service Request has been deleted successfully');
    }
}

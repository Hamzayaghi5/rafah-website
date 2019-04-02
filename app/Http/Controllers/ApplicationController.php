<?php

namespace App\Http\Controllers;

use App\Application;
use App\Customer;
use App\Service;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services=Service::all();
        return view('admin.Application.add',compact('services'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            Application::create([
            'service_id' => $request['service_id'],
            'description' => $request['description'],
          ]);
            return redirect('application/view');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $applications=Application::all();
        $customer=Customer::all();
        return view('admin.Application.view',compact('applications','customer'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application,$id)
    {   
        $application=Application::find($id);
        $service=Service::all();
        return view('admin.Application.edit',compact('application','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $new_application=Application::find($id);
        $new_application->service_id=$request['service_id'];
        $new_application->description=$request['description'];
        $new_application->save();
        return redirect('application/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }

    function set( Application $application , Request $request){
  $application->description=$request['description'];
  $application->service_id=$request['service_id'];
  $application->customer_id=$request['customer_id'];
  $application->save();
  return $application;
}

     function get(Application $application){
     return $application;
     }
     public function getAllApplication()
     {
         $application=Application::all();
         return $application;
     }


          public function getbinding()
     {
         $application=Application::where('status','binding')->with('service','customer')->get();
         return $application;
     }

     public function getsingle_application($id)
     {
         $application=Application::find($id);
         return view('admin.Application.app_info',compact('application'));
     }
     
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

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
        return view('home');
    }

    public function admin_index()
    {
        # code...
             $service_count=Service::all()->count();
        return view('admin.index',compact('service_count'));
    }
}

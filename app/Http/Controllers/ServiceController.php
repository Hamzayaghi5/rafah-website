<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
     return view('admin.Services.add'); 
    }


    public function create_sub(Service $service,$id)
    {
        $service=Service::find($id);
        $service1=Service::all();
        return view('admin.Services.add_sub',compact('service','service1'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $data=$request->all();
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
                $path = Storage::putFile('public/services',request()->file('img'));
                if(empty($path)){
                    return response()->json([],400);
                }

            }
            $data['img'] = '/storage/'.$path;
         Service::create([
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'img' => $request['img'],
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],

          ]);
         return redirect('/service/view');
    }
    return response()->json([],400);
}



    public function store_sub(Request $request)
    {  

        Service::create([
            'title_en' => $request['title_en'],
            'img' => 'hello.jpg',
            'description_en' => $request['description_en'],
            'title_ar' => $request['title_ar'],
            'reference'=>$request['service_id'],
            'description_ar' => $request['description_ar'],
          ]);

        return redirect('/service/view');
    }
 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $services=Service::where('reference',0)->get();
      return view ('admin.Services.view',compact('services'));
    }

    public function show_sub($id)
    {  
    $services=Service::where('reference',$id)->get();
    return view ('admin.Services.view_sub',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$id)
    {
        $service=Service::find($id);
        return view('admin.Services.edit',compact('service'));
    }


        public function view_ser($id)
    {
        $service=Service::find($id);
        return view('admin.Services.service_view',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             $data=$request->all();
             $img=$request['img'];
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
                $path = Storage::putFile('/public/services',request()->file('img'));
                if(empty($path)){
                    return response()->json([],400);
                }

            }
        }
            $data['img'] = '/storage/'.$data['img'];

        $new_service=Service::find($id);
        $new_service->title_ar=$data['title_ar'];
        $new_service->title_en=$data['title_en'];
        $new_service->description_ar=$data['description_ar'];
        $new_service->description_en=$data['description_en'];
        $new_service->img=$img;
        $new_service->save();
        return redirect('service/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    function set( Service $service , Request $request){
  $service->ar_title=$request['ar_title'];
  $service->en_title=$request['en_title'];
  $service->ar_description=$request['ar_description'];
  $service->en_description=$request['en_description'];
  $service->img=$request['img'];
  $service->save();
  //$currentuser->save();//
  return $service;
}

     function get(Service $service){
     return $service;
     }
     function getAllservices()
     {
        $services=Service::where('reference','0')->with('images')->get();
        return $services;

     }
          function getAllSub($id)
     {
        $services=Service::where('reference',$id)->with('images')->get();
        return $services;

     }
}

<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
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
        return view('admin.Offer.add');
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
                $path = Storage::putFile('offer',request()->file('img'));
                if(empty($path)){
                    return response()->json([],400);
                }

            }
            $data['img'] = '/storage/'.$path;
         Offer::create([
            'title_en' => $data['title_en'],
            'title_ar' => $data['title_ar'],
            'img' => $data['img'],
            'description_en' => $data['description_en'],
            'description_ar' => $data['description_ar'],

          ]);
         return redirect('/offer/view');
    }
    return response()->json([],400);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        $offers=Offer::all();
        return view('admin.Offer.view',compact('offers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer=Offer::find($id);
        return view('admin.Offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             $data=$request->all();
      if($request->file('img')!= null){

            $path;
            if(request()->file('img')->isValid()){
                $path = Storage::putFile('offer',request()->file('img'));
                if(empty($path)){
                    return response()->json([],400);
                }

            }
        }
            $data['img'] = '/storage/'.$path;

        $new_offer=Offer::find($id);
        $new_offer->title_ar=$data['title_ar'];
        $new_offer->title_en=$data['title_en'];
        $new_offer->description_ar=$data['description_ar'];
        $new_offer->description_en=$data['description_en'];
        $new_offer->img=$data['img'];
        $new_offer->save();
        return redirect('offer/view');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
           public function view_offer($id)
    {
        $offer=Offer::find($id);
        return view('admin.Offer.offer_view',compact('offer'));
    }


        function set( Offer $offer , Request $request){
  $offer->title_ar=$request['title_ar'];
  $offer->en_title=$request['title_en'];
  $offer->description_ar=$request['description_ar'];
  $offer->description_en=$request['description_en'];
  $offer->img=$request['img'];
  $offer->save();
  //$currentuser->save();//
  return $offer;
}

     function get(Offer $offer){
     return $offer;
     }
     function getAllOffers()
     {
        $offer=offer::all();
        return $offer;

     }
     
}

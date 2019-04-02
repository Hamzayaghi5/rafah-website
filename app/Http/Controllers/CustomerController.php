<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        return view('admin.Customer.add');
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
         Customer::create([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'address' => $request['address'],
            'facebook' => $request['facebook'],
          ]);
         return redirect('customer/view');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        
        $customers=Customer::all();
        return view ('admin.Customer.view',compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer,$id)
    {
        //

        $customer=Customer::find($id);
        $arr = Array('customer'=>$customer);
        return view('admin.Customer.edit',$arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $new_customer=Customer::find($id);
        $new_customer->name=$request['name'];
        $new_customer->phone_number=$request['phone_number'];
        $new_customer->email=$request['email'];
        $new_customer->address=$request['address'];
        $new_customer->facebook=$request['facebook'];
        $new_customer->save();
        return redirect('customer/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }


    function set( Customer $customer , Request $request){
        $customer->name=$request['name'];
        $customer->phone_number=$request['phone_number'];
        $customer->email=$request['email'];
        $customer->lat=$request['lat'];
        $customer->lang=$request['lang'];
        $customer->address=$request['address'];
        $customer->facebook=$request['facebook'];
        $customer->password = bcrypt($request['password']);
        $customer->save();
    return $customer;
    }

     function get(Customer $customer){
     return $customer;
     }

     public function getAllCustomers()
     {
         $customer=Customer::all();
         return $customer;
     }


     public function customerLogin(Request $request)
     {
         $userName  = $request['email'];
         $password = $request['password'];

         $customer = Customer::where('email',$userName)->orWhere('phone_number',$userName)->get(); 
        return $customer->isempty;
         if(count($customer)>0){
            $cruptPassword = bcrypt($password);
            if ($customer[0]->password == $cruptPassword){
                return $customer[0];
            }
         }
         return response()->json(['there is no user'],400);
     }

}

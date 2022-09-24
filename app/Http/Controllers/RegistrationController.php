<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\reviewstore;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function index1()
    {
        return view('new-form');
    }
    public function register(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',

            'password' => 'required',
            'password_confirm' => 'required|same:password'

        ]);
    }
    public function reviewstore(Request $request){
        
        //  echo "<pre>";
        // print_r($request->all());
         $rev = new reviewstore();
        $rev->Rev_Rate = $request['rating_data'];
        $rev->user_name = $request['user_name'];
        $rev->Rev_Desc = $request['Rev_Desc'];
        $rev->Equip_ID = $request['Equip_ID'] ;
        $rev->User_ID = $request['User_ID']; 
        $rev->save();

        //return redirect('register/view');
    }
    public function create()
    {
        $url = url('/register');
        $data = compact('url');
        return view('register')->with($data);
    }

    public function store(Request $request)
    {
        // INSERT DATA IN TABLE
        // echo "<pre>";
        // print_r($request->all());
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('register/view');
    }
    public function view(Request $request)
    {
        $customers = customer::all();
        // echo "<pre>";
        // print_r($customers);
        // die;
        $data = compact('customers');
        return view('register-view')->with($data);
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('register/view');
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            //not found
            return redirect('register');
        } else {
            $url = url('register/update') . "/" . $id;
            $data = compact('customer', 'url');
            return view('register')->with($data);
            //found
        }
    }
}

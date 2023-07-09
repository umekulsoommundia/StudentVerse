<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\user;
use Illuminate\Http\Request;



class UserController extends Controller
{
    
   public function index()
   {
       //
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $r)
   {
    $validate = Validator::make($r->all(),[
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email|unique:Users,email',
        'password' => 'required|min:8',
        'qualification' => 'required|not_in:0',
        'cityId' => 'required|not_in:0',
        'address' => 'required',
        'description' => 'required',
    ]);
    if($validate->fails()){
        return back()->withInput()->withErrors($validate);
    }
    else{
        $User = new User();
        $User->First_Name = $r->First_Name;
        $User->Last_Name = $r->Last_Name;
        $User->Email = $r->Email;
        $User->User_Type = $r->User_Type;
        $User->password = $r->password;

        $User->save();

        return redirect('login')->with("message","Successfully Registered! Please Enter Your Credenials To Login");
    }
   }

   /**
    * Display the specified resource.
    */
   public function show(user $userbox)
   {
        return view('Dashboard.register');
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(user $userbox)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, user $userbox)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(user $userbox)
   {
       //
   }
}

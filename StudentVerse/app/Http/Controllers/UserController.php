<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\UserBox;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;




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


    function signin(){
        return view ('User_Dashboard.sign-in');
    }



    function User_Post_login(request $request){
  
   
     $email = $request->email;
     $password = $request->password;

     $login = DB::table("user_boxes")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("user_boxes")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('User_Dashboard.index');

     }

     else
     {
        return redirect()->back()->with("message","Invalid Credentials");
     }

    }







   public function store(Request $r)
   {


    $validate = Validator::make($r->all(),[
        'First_Name' => 'required',
        'Last_Name' => 'required',
        'Email' => 'required|email|unique:user_boxes,email',
        'Password' => 'required|min:8',
        'Phone_Number' => 'required',
        'User_Type' => 'required',
    ]);
    if($validate->fails()){
        return back()->withInput()->withErrors($validate);
    }
    else
    {
        $User = new UserBox();
        $User->First_Name = $r->First_Name;
        $User->Last_Name = $r->Last_Name;
        $User->Email = $r->Email;
        $User->Password = $r->Password;
        $User->Phone_Number = $r->Phone_Number;
        $User->User_Type = $r->User_Type;
        $User->save();

        return redirect('/signin')->with("message","Successfully Registered! Please Enter Your Credenials To Login");
    }

   }

   /**
    * Display the specified resource.
    */
   public function show( $userbox)
   {
        return view('User_dashboard.signup');
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
   public function update(Request $request,  $userbox)
   {
       //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy( $userbox)
   {
       //
   }
}

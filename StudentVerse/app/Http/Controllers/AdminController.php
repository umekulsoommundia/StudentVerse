<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin_Box;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    

    function signin(){
        return view ('admin.sign-in');
    }



    function Admin_Post_login(request $request){
  
   
     $email = $request->email;
     $password = $request->password;

     $login = DB::table("admin__boxes")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("admin__boxes")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return view('admin.index');

     }

     else
     {
        return redirect()->back()->with("message","Invalid Credentials");
     }

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
    public function store(Request $request)
    {
         
        $validate = Validator::make($request->all(),[
            'username' => 'required',
            'email' => 'required|email|unique:Users,email',
            'password' => 'required|min:8',
        ]);

    
    if($validate->fails()){
        return back()->withInput()->withErrors($validate);
    }
    else{


        $admin = new Admin_Box();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();

        return redirect('admin.sign-in')->with("message","Successfully Registered! Please Enter Your Credenials To Login");
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.sign-up');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Session::flush();

        return redirect()->back()->with('message', "You've Logged Out Succesfully");
    }
}

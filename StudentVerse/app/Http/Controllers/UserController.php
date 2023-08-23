<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\UserBox;
use Illuminate\Support\Facades\Auth;
use Illuminate\facades\hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\models\InterestBox;
use App\Http\Middleware\Authenticate;
use App\Models\UserProfileBox;

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


    function showUserProfileForm() {
        $interests = InterestBox::all();
        $msg = session('msg'); // Set the session message here
    
        return view('User_Dashboard.profile-setup', compact('interests', 'msg'));
    }


    function profileSetupPost(Request $request) {
        // Validate the form data
        $request->validate([
            // Other validation rules
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed image types and size
        ]);

        
        // Handle file upload for profile image
        $imagePath = $request->file('Image')->store('user_profile_images', 'public');

        
        // Create and save the user profile
        $userProfile = new UserProfileBox();

      
    $userProfile->User_Id = auth()->user()->id;


        $userProfile->User_Name = $request->User_Name;
        $userProfile->Email = $request->Email;
        $userProfile->Current_work = $request->Current_work;
        $userProfile->Interest_Id = $request->Interest_Id;
        $userProfile->Bio = $request->Bio;
        $userProfile->Image = $imagePath; // Save the image path
        $userProfile->status = 1; // Set status to 1
        $userProfile->save();

        // Redirect with a success message
        return redirect('/user-home')->with("message", "Profile setup successfully!");
    }



     

    function showUserProfile(Request $request) {
        $userProfile = UserProfileBox::where('User_Id', auth()->user()->id)->first();

        if ($userProfile && $userProfile->status == 1) {
            return view('User_Dashboard.index'); // Redirect to user profile page
        } else {
            return view('user.profile-setup')->with("message", "Please complete profile setup first.");
        }
    }



    function User_Post_login(request $request){
 $email = $request->email;
     $password = $request->password;

     $login = DB::table("user_boxes")->select('email')->where(['email'=>$email,'password'=>$password])->first();
     
     $loginPass = DB::table("user_boxes")->select('password')->where(['email'=>$email,'password'=>$password])->first();

     if($login && $loginPass){
         session(['email'=>$login->email,'password'=>$loginPass->password]);
         return redirect('profile-setup')->with("msg", "Please complete profile setup.");
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

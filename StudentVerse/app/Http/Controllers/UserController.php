<?php

namespace App\Http\Controllers;

use App\Models\userBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\models\InterestBox;

use App\Models\UserProfileBox;


class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
    }



    function signin()
    {
        return view('User_Dashboard.sign-in');
    }



    function User_Post_login(Request $request)
    {


        $Email = $request->Email;
        $Password = $request->Password;

        $login = DB::table("user_boxes")->select('Email')->where(['Email' => $Email, 'Password' => $Password])->first();
        $loginPass = DB::table("user_boxes")->select('Password')->where(['Email' => $Email, 'Password' => $Password])->first();
        $loginId = DB::table("user_boxes")->select('id')->where(['Email' => $Email, 'Password' => $Password])->first();

        if ($login && $loginPass) {
            session(['Email' => $login->Email, 'userId' => $loginId->id]);

            return redirect()->route('profile-setup',['userid'])->with("message", "Please complete your profile first");
        } else {
            return redirect()->back()->with("message", "Invalid Credentials");
        }
    }


    function showUserProfileForm($userid)
    {
        $userid =$userid;
        session(['userId'=>$userid]);
        $interests = InterestBox::all();
        $msg = session('msg'); // Set the session message here
        return view('User_Dashboard.profile-setup', compact('interests', 'msg'));
    }


    function profileSetupPost(Request $request  )
    {
        // Validate the form data
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imagePath = $request->file('Image')->store('user_profile_images', 'public');
        $userProfile = new UserProfileBox();
        $userId = session('userId');
        $userProfile->id = $userId ;

        $userProfile->User_Name = $request->User_Name;
        $userProfile->Email = $request->Email;
        $userProfile->Current_work = $request->Current_work;
        $userProfile->Interest_Id = $request->Interest_Id;
        $userProfile->Bio = $request->Bio;
        $userProfile->Image = $imagePath; // Save the image path
        $userProfile->status = 1; // Set status to 1
        $userProfile->save();

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

    public function show()
    {
        return view('User_dashboard.sign-in');
    }


    public function edit()
    {
        //
    }


    public function update(Request $request,  $userbox)
    {
        //
    }


    public function destroy($userbox)
    {
        //
    }
}

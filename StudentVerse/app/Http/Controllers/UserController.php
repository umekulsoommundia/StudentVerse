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
use App\Models\question_box;
use App\Models\question_tag;
use App\Models\UserProfileBox;
use App\Models\tag_box;


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
        $id = $loginId->id;

        session(['Email' => $login->Email, 'userId' => $id]);

        // Redirect with a flash message
        return redirect()->route('profile-setup', ['id' => $id])->with("message", "Please complete your profile first");
    } else {
        return redirect()->back()->with("message", "Invalid Credentials");
    }
}

    function showUserProfileForm($id)
    {
        $userId = session('userId');
        $userProfile = UserProfileBox::where('User_Id', $userId)->first();
    
        if ($userProfile && $userProfile->status == 1) {
            return redirect()->route('user-home', ['id' => $userId]);
        }
    
        $interests = InterestBox::all();
        $msg = session('msg');
        return view('User_Dashboard.profile-setup', compact('interests', 'msg'));
    }
    


    function profileSetupPost(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imagePath = $request->file('Image')->store('user_profile_images', 'public');
        $userProfile = new UserProfileBox();
  
        $userProfile->User_id = session('userId');
        $userProfile->User_Name = $request->User_Name;
        $userProfile->Email = $request->Email;
        $userProfile->Current_work = $request->Current_work;
        $userProfile->Interest_Id = $request->interestId;
        $userProfile->Bio = $request->Bio;
        $userProfile->Image = $imagePath; // Save the image path
        $userProfile->status = 1; // Set status to 1
        $userProfile->User_id = session('userId');
        $userProfile->Badge_Id =0;
        $userProfile->Mail_Id =0;
        $userProfile->save();
        //echo $userProfile;
        $id= session('userId');

        return redirect()->route('user-home', ['id' => $id])->with("message", "Profile setup successfully!");
    }

    function showUserProfile(Request $request) {
        // Check if the user is authenticated
        if (session()->has('userId')) {
            $userId = session('userId');
            
            // Check the user's profile status
            $userProfile = UserProfileBox::where('User_Id', $userId)->first();
    
            if ($userProfile) {
                if ($userProfile->status == 0) {
                    // Redirect to profile setup page
                    return redirect()->route('profile-setup', ['id' => $userId]);
                } elseif ($userProfile->status == 1) {
                    // Redirect to user profile page
                
                  
                    $questionBoxes = question_box::with('user')->latest()->get();

                    foreach ($questionBoxes as $questionBox) {
                        if ($questionBox->user) {
                            echo $questionBox->user->name;
                        } else {
                            echo "User not found";
                        }

                    $tags = tag_box::all();
                    $msg = session('msg');
                    return view('User_Dashboard.index', compact('tags', 'msg','questionBoxes'));
               
                }
            }
        }
    }
        // User is not authenticated or profile status not found, handle this case (e.g., redirect to login)
        return redirect()->route('signin'); // You might need to adjust this route
    }


    // function showUserProfile(Request $request) {
    //     // Check if the user is authenticated
    //     if (session()->has('userId')) {
    //         $userId = session('userId');
            
    //         // Check the user's profile status
    //         $userProfile = UserProfileBox::where('User_Id', $userId)->first();
    
    //         if ($userProfile) {
    //             if ($userProfile->status == 0) {
    //                 // Redirect to profile setup page
    //                 return redirect()->route('profile-setup', ['id' => $userId]);
    //             } elseif ($userProfile->status == 1) {
    //                 // Redirect to user profile page
                    
    //                 $questionBoxes = question_box::with('user')->latest()->get();
    //                 $tags = tag_box::all();
    //                 $msg = session('msg');
                    
    //                 return view('User_Dashboard.index', compact('tags', 'msg', 'questionBoxes'));
    //             }
    //         }
    //     }
    
    //     // User is not authenticated or profile status not found, handle this case (e.g., redirect to login)
    //     return redirect()->route('signin'); // You might need to adjust this route
    // }
    

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

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
use Illuminate\Support\Facades\Log;


 
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
        
        // Fetch the user's email from the user_boxes table
        $user = UserBox::find($userId);
    
        $interests = InterestBox::all();
        $msg = session('msg');
        
        // Pass the user's email to the "profile-setup" view
        return view('User_Dashboard.profile-setup', compact('user', 'interests', 'msg'));
    }
    


    // public function profileSetupPost(Request $request)
    // {
    //     $request->validate([
    //         'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'User_Name' => 'required|string|max:16|unique:user_profile_boxes,User_Name',
    //         'Current_work' => 'nullable|string|max:55',
    //         'interestId' => 'required|integer',
    //         'Bio' => 'nullable|string|max:1000',
    //     ]);

    //     if ($request->hasFile('Image')) {
    //         $imagePath = $request->file("Image");
    //         $imageFileName = time() . "." . $imagePath->getClientOriginalExtension();
    //         $imagePath->move(public_path('user_profile_images'), $imageFileName);
    //         $imagePath = 'user_profile_images/' . $imageFileName;
    //     } else {
    //         return redirect()->back()->with('error', 'Please upload an image.');
    //     }

    //     if (session()->has('userId')) {
    //         $userId = session('userId');
    //         $user = UserBox::find($userId);
    //         $email = $user->Email;

    //         $userProfile = new UserProfileBox();
    //         $userProfile->User_id = session('userId');
    //         $userProfile->User_Name = $request->User_Name;
    //         $userProfile->Email = $request->Email; // Make sure you have the Email field in the form
    //         $userProfile->Current_work = $request->Current_work;
    //         $userProfile->Interest_Id = $request->interestId;
    //         $userProfile->Bio = $request->Bio;
    //         $userProfile->Image = $imagePath;
    //         $userProfile->status = 1;
    //         $userProfile->User_id = session('userId');
    //         $userProfile->Badge_Id = 0;
    //         $userProfile->Mail_Id = 0;
    //         $userProfile->save();

    //         $id = session('userId');
    //         return redirect()->route('user-home', ['id' => $id])->with("message", "Profile setup successfully!");
    //     }
    //     return redirect()->route('login');
    // }
    

    public function profileSetupPost(Request $request)
    {
        $validatedData = $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'User_Name' => 'required|string|max:16|unique:user_profile_boxes,User_Name',
            'Current_work' => 'nullable|string|max:55',
            'interestId' => 'required|integer',
            'Bio' => 'nullable|string|max:1000',
        ]);
    
        if ($request->hasFile('Image')) {
            $imagePath = $request->file("Image");
            $imageFileName = time() . "." . $imagePath->getClientOriginalExtension();
            $imagePath->move(public_path('user_profile_images'), $imageFileName);
            $imagePath = 'user_profile_images/' . $imageFileName;
        } else {
            return redirect()->back()->with('error', 'Please upload an image.');
        }
    
        if (session()->has('userId')) {
            $userId = session('userId');
            $user = UserBox::find($userId);
    
            $userProfile = new UserProfileBox();
            $userProfile->User_id = session('userId');
            $userProfile->User_Name = $request->User_Name;
            $userProfile->Email = $request->Email;
            $userProfile->Current_work = $request->Current_work;
            $userProfile->Bio = $request->Bio;
            $userProfile->Image = $imagePath;
            $userProfile->status = 1;
            $userProfile->User_id = session('userId');
            $userProfile->Badge_Id = 0;
            $userProfile->Mail_Id = 0;
            $userProfile->Interest_Id = $request->interestId; // Save the single interest ID
            
            $userProfile->save();

            
    
            $id = session('userId');
            return redirect()->route('user-home', ['id' => $id])->with("message", "Profile setup successfully!");
        }
        return redirect()->route('login');
    }
    

    

    function showUserProfile(Request $request)
    {
        // Check if the user is authenticated
        if (session()->has('userId')) {
            $userId = session('userId');
            
            // Fetch the user's data
            $user = userBox::find($userId);
    
            // Check the user's profile status
            $userProfile = UserProfileBox::where('User_Id', $userId)->first();
    
            if ($userProfile) {
                if ($userProfile->status == 0) {
                    // Redirect to profile setup page
                    return redirect()->route('profile-setup', ['id' => $userId]);
                } elseif ($userProfile->status == 1) {
                    // Redirect to user profile page
                    $questionBoxes = question_box::with('user')->latest()->get();
    
                    $tags = tag_box::all();
                    $msg = session('msg');
    
                    return view('User_Dashboard.index', compact('tags', 'msg', 'questionBoxes', 'user'));
                }
            }
        }
        
        // User is not authenticated or profile status not found, handle this case (e.g., redirect to login)
        return redirect()->route('login'); // You might need to adjust this route
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBox;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\models\InterestBox;
use App\Models\question_box;
use App\Models\question_tag;
use App\Models\tag_box;
use App\Models\UserProfileBox;


class QuestionController extends Controller
{
    
    public function questionpost(Request $request)
    {
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Subject' => 'required|string',
            'Description' => 'required|string',
            'Tagged_Id' => 'required|array',
        ]);
    
        // Check if the "Anonymous" checkbox is checked
        $isAnonymous = $request->has('Anonymous');
    
        if ($request->hasFile('Image')) {
            $imagePath = $request->file("Image");
            $imageFileName = time() . "." . $imagePath->getClientOriginalExtension();
            $imagePath->move(public_path('question_images'), $imageFileName);
            $imagePath = 'question_images/' . $imageFileName;
        } else {
            return redirect()->back()->with('error', 'Please upload an image.');
        }
    
        if (session()->has('userId')) {
            $userId = session('userId');
            $user = UserBox::find($userId);
    
            if ($user) {
                $question = new question_box();
                $question->Subject = $request->input('Subject');
                $question->Description = $request->input('Description');
                $question->Image = $imagePath;
                $question->User_Id = $userId; // Set User_Id to the current user's ID
                $question->Is_Anonymous = $isAnonymous;
                $question->save();
    
                $question->tags()->sync($request->input('Tagged_Id'));
                // dd($user->id, $question->user->id);

                return redirect()->back()->with("message", "Question posted");
            } else {
                // Handle the case where the user doesn't exist
                return redirect()->route('login');
            }
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->route('login');
        }
    }

    public function editPost($id)
{
    // Fetch the post to be edited by its ID
    $post = question_box::find($id);

    // Check if the post exists and if the current user is the owner
    if (!$post || $post->User_Id !== session('userId')) {
        return redirect()->route('user-home')->with("message", "You don't have permission to edit this post.");
    }

    // Load the edit view with the post data
    return view('edit-post', compact('post'));
}

    
}

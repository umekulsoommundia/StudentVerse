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
    
    // function userhome()
    // {
    //     return view('User_Dashboard.index');
    // }
    public function questionpost(Request $request)
    {
        // Debugging statement to see the request data
    
        // Validation rules
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Subject' => 'required|string',
            'Description' => 'required|string',
            'tagId' => 'required|array',
        ]);
    
        if ($request->hasFile('Image')) {
            $imagePath = $request->file('Image')->store('question_images', 'public');
        } else {
            return redirect()->back()->with('error', 'Please upload an image.');
        }
        
        // Create a new question instance
        $question = new question_box();
        $question->Subject = $request->input('Subject');
        $question->Description = $request->input('Description');
        $question->Image = $imagePath; 
        $question->Tagged_Id = $request->input('Tagged_Id'); // Make sure 'Tagged_Id' is set in your form

        $question->User_id = session('userId');
        $question->save();
    
        foreach ($request->input('tagId') as $tagId) {
            $questionTag = new question_tag();
            $questionTag->question_id = $question->id; 
            $questionTag->tag_id = $tagId;
            $questionTag->save();
        }
    
        // Rest of your code...
    
        return redirect()->back()->with("message", "Question posted");
    }


    // function questionpost(Request $request)
    // {

    //     $request->validate([
    //         'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'Subject' => 'required|string',
    //         'Description' => 'required|string',
    //         'tagId' => 'required|array', // Ensure tagId is an array
    //     ]);
    
    //     $imagePath = $request->file('Image')->store('question_images', 'public');
        
    //     $question = new question_box();
    //     $question->Subject = $request->input('Subject');
    //     $question->Description = $request->input('Description');
    //     $question->Tagged_Id = $request->input('Tagged_Id'); // This will be an array of selected tag IDs
    //     $question->Image = $imagePath;
    //     $question->User_id = session('userId');
    //     $question->save();
    
    //     return redirect()->back()->with("message", "Question posted");
    // }

}

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
    // public function questionpost(Request $request)
    // {

    //     // // Validation rules
    //     // $request->validate([
    //     //     'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     //     'Subject' => 'required|string',
    //     //     'Description' => 'required|string',
    //     //     'tagId' => 'required|array',
    //     // ]);
    
    //     if ($request->hasFile('Image')) {
    //         $imagePath = $request->file('Image')->store('question_images', 'public');
    //     } else {
    //         return redirect()->back()->with('error', 'Please upload an image.');
    //     }
        
    //     // Create a new question instance
    //     $question = new question_box();
    //     $question->Subject = $request->input('Subject');
    //     $question->Description = $request->input('Description');
    //     $question->Image = $imagePath; 
    //     $question->Tagged_Id = $request->input('Tagged_Id'); 
    //     $question->User_id = session('userId');
    //     $question->save();
    
    //     foreach ($request->input('tagId') as $tagId) {
    //         $questionTag = new question_tag();
    //         $questionTag->question_id = $question->id; 
    //         $questionTag->tag_id = $tagId;
    //         $questionTag->save();
    //     }
    
    //     // Rest of your code...
    
    //     return redirect()->back()->with("message", "Question posted");
    // }
    // public function questionpost(Request $request)
    // {
    //     // Validation rules (uncomment if needed)
    //     // $request->validate([
    //     //     'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     //     'Subject' => 'required|string',
    //     //     'Description' => 'required|string',
    //     //     'Tagged_Id' => 'required|array',
    //     // ]);
        
    //     if ($request->hasFile('Image')) {
    //         $imagePath = $request->file('Image')->store('question_images', 'public');
    //     } else {
    //         return redirect()->back()->with('error', 'Please upload an image.');
    //     }
        
    //     // Create a new question instance
    //     $question = new question_box();
    //     $question->Subject = $request->input('Subject');
    //     $question->Description = $request->input('Description');
    //     $question->Image = $imagePath; 
    //     $question->User_id = session('userId');
    //     $question->save();
    
    //     // Get the selected tag IDs from the input
    //     $tagIds = $request->input('Tagged_Id');
        
    //     // Attach the selected tag IDs to the question
    //     $question->tags()->attach($tagIds);
        
    //     // Rest of your code...
        
    //     return redirect()->back()->with("message", "Question posted");
    // }
    
    // public function questionpost(Request $request)
    // {
    //     // Validation rules
    //     $request->validate([
    //         'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'Subject' => 'required|string',
    //         'Description' => 'required|string',
    //         'Tagged_Id' => 'required|array', // Note: I changed 'tagId' to 'Tagged_Id'
    //     ]);
    
    //     // Check if a file was uploaded
    //     if ($request->hasFile('Image')) {
    //         $imagePath = $request->file('Image')->store('question_images', 'public');
    //     } else {
    //         return redirect()->back()->with('error', 'Please upload an image.');
    //     }
    
    //     // Create a new question instance
    //     $question = new question_box();
    //     $question->Subject = $request->input('Subject');
    //     $question->Description = $request->input('Description');
    //     $question->Image = $imagePath;
    //     $question->User_Id = session('userId'); // Make sure this is correctly set
    //     $question->save();
    
    //     // Sync the tags associated with the question
    //     $question->tags()->sync($request->input('Tagged_Id'));
    
    //     return redirect()->back()->with("message", "Question posted");
    // }
    
//     public function questionpost(Request $request)
//     {
//         // Validation rules
//         $request->validate([
//             'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'Subject' => 'required|string',
//             'Description' => 'required|string',
//             'Tagged_Id' => 'required|array', // Note: I changed 'tagId' to 'Tagged_Id'
//         ]);
    
//         // Check if a file was uploaded
//         if ($request->hasFile('Image')) {
//             $imagePath = $request->file('Image')->store('question_images', 'public');
//         } else {
//             return redirect()->back()->with('error', 'Please upload an image.');
//         }
    
//         // Create a new question instance
//         $question = new question_box();
//         $question->Subject = $request->input('Subject');
//         $question->Description = $request->input('Description');
//         $question->Image = $imagePath;
//         $question->User_Id = session('userId');
//         $question->Tagged_Id = $request->input('Tagged_Id'); 
//  // Make sure this is correctly set
//         $question->save();
    
//         // Attach the tags associated with the question
//         $question->tags()->attach($request->input('Tagged_Id'));
    
//         return redirect()->back()->with("message", "Question posted");
//     }
    

public function questionpost(Request $request)
{
    // Validation rules
    $request->validate([
        'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'Subject' => 'required|string',
        'Description' => 'required|string',
        'Tagged_Id' => 'required|array',
    ]);

    // Check if a file was uploaded
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
$question->User_Id = session('userId');
$question->save();

// Attach the tags associated with the question
$question->tags()->sync($request->input('Tagged_Id')); // Use sync instead of attach


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

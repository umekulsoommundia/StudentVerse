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
use App\Models\tag_box;
use App\Models\UserProfileBox;

class QuestionController extends Controller
{
    
    // function userhome()
    // {
    //     return view('User_Dashboard.index');
    // }

    function questionpost($request)
    {
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imagePath = $request->file('Image')->store('question_images', 'public');
        $question = new question_box();
  
        $question->Subject = $request->Subject;
        $question->Description = $request->Description;
        $question->Tagged_Id = $request->Tagged_Id;
        $question->Image = $imagePath; // Save the image path
        $question->User_id = session('userId');
        $question->save();
        //echo $question;
        $id= session('userId');

        return redirect()->back()->with("message", "question posted");
    }

}

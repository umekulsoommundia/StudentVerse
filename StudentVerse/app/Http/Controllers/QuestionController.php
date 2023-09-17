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
                $question->User_Id = $userId;
                $question->save();

                $question->tags()->sync($request->input('Tagged_Id'));

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
}

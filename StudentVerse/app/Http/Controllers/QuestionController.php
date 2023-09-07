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
use App\Models\tag_box;
use App\Models\UserProfileBox;

class QuestionController extends Controller
{
    
    function userhome()
    {
        return view('User_Dashboard.index');
    }

    function home($id)
    {
        $userId = session('userId');
        $userProfile = UserProfileBox::where('User_Id', $userId)->first();
    
        $tags = tag_box::all();
        $msg = session('msg');
        return view('User_Dashboard.index', compact('tags', 'msg'));
    }

}

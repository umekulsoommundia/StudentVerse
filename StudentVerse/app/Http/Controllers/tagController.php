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
use App\Models\UserProfileBox;
use App\Models\tag_box;

class tagController extends Controller
{

    public function deleteTag($id)
{
    // Delete the tag record
    tag_box::destroy($id);

    // Set Tagged_Id to 0 in related question_boxes records
    question_box::where('Tagged_Id', $id)->update(['Tagged_Id' => 0]);

    // Redirect or respond as needed
}

}

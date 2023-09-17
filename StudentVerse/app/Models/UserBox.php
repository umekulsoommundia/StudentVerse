<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBox extends Model
{
    use HasFactory;

    public function userProfile()
    {
        return $this->hasOne(UserProfileBox::class, 'User_Id'); // Make sure 'User_Id' matches the actual foreign key in the table
    }
    



}

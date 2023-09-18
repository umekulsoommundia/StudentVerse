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
    
// In your UserBox model (UserBox.php)

public function isStudent()
{
    // Assuming you have a 'user_type' column in your users table
    return $this->User_Type === 'student';
}

public function isTeacher()
{
    // Assuming you have a 'user_type' column in your users table
    return $this->User_Type === 'teacher';
}



}

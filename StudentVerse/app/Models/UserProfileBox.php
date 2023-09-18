<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfileBox extends Model
{
    use HasFactory;

// User.php
public function interest()
{
    return $this->belongsTo(InterestBox::class, 'Interest_Id');
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfileBox extends Model
{
    use HasFactory;

// User.php
public function interests()
{
    return $this->belongsToMany(Interest::class, 'user_interests', 'user_id', 'interest_id');
}

}

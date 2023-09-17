<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestBox extends Model
{
    use HasFactory;

    // Interest.php
public function users()
{
    return $this->belongsToMany(User::class, 'user_interests', 'interest_id', 'user_id');
}

}

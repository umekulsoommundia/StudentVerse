<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question_box extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(TagBox::class, 'question_tags', 'question_id', 'tag_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id'); // Assuming 'User_Id' is the foreign key in your question_boxes table
    }

    
}

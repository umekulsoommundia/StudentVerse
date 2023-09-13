<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag_box extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->belongsToMany(QuestionBox::class, 'question_tags', 'tag_id', 'question_id');
    }
    
}

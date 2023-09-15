<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class question_box extends Model
{
    
    use HasFactory;
    protected $fillable = ['Subject', 'Description', 'Image', 'User_Id'];

    public function tags()
    {
        return $this->belongsToMany(TagBox::class, 'question_tags', 'question_id', 'tag_id');
    }
    public function user()
    {
        return $this->belongsTo(UserBox::class, 'User_Id'); // Assuming 'User_Id' is the correct foreign key in your question_boxes table
    }
    protected $casts = [
        'Image' => 'string',
    ];
    
    
}

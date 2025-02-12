<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)
                    ->whereNull('parent_comment_id')
                    ->with('user', 'replies.user');
    }

    // If you want to get all comments (including replies) you can add this method
    public function allComments()
    {
        return $this->hasMany(Comment::class);
    }
}

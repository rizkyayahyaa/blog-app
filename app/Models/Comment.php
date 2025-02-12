<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'parent_comment_id',
        'content'
    ];

    // Relasi ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke komentar parent (jika ada)
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    // Relasi ke komentar anak (nested replies)
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id')->with('replies'); // Recursive
    }
}

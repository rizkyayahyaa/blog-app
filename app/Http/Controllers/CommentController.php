<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


    public function store(Request $request)  // Ubah parameter di sini
    {
        // Validate request
        $request->validate([
            'content' => 'required|string',
            'post_id' => 'required|exists:posts,id',
            'parent_comment_id' => 'nullable|exists:comments,id'
        ]);

        // Create comment
        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'parent_comment_id' => $request->parent_comment_id,
            'content' => $request->content
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    // ... rest of controller code
}

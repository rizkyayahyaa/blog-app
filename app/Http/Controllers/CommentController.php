<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($postId)
    {
        $comments = Comment::where('post_id', $postId)->get();
        return view('comments.index', compact('comments', 'postId'));
    }

    public function create($postId)
    {
        return view('comments.create', compact('postId'));
    }

    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $postId,
            'user_id' => auth()->id(),
            'parent_comment_id' => $request->parent_comment_id,
            'content' => $request->content,
        ]);

        return redirect()->route('comments.index', $postId);
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update([
            'content' => $request->content,
        ]);

        return redirect()->route('comments.index', $comment->post_id);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $postId = $comment->post_id;
        $comment->delete();

        return redirect()->route('comments.index', $postId);
    }
}


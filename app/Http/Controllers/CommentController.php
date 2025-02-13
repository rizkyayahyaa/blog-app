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

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id); // Cari komentar berdasarkan ID

        // Pastikan hanya pemilik komentar atau admin yang bisa menghapus
        if (auth()->user()->id !== $comment->user_id && !auth()->user()->is_admin) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }

}

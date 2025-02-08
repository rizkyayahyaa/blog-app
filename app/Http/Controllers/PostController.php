<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Menampilkan semua postingan
    public function index()
    {
        // Fetch all posts, ordered by the latest first
        $posts = Post::latest()->get();

        // Fetch all users
        $users = User::all();

        // Pass both posts and users to the view
        return view('admin.posts.index', compact('posts', 'users'));
    }

    // Menampilkan form untuk membuat posting
    public function create()
    {
        // Fetch all users
        $users = User::all();

        // Pass the users variable to the view
        return view('admin.posts.create', compact('users'));
    }

    // Menyimpan posting baru
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',  // Ensure user_id is valid
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create the new post with the selected user_id
        Post::create([
            'user_id' => $request->user_id,  // Use the user_id from the form
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to posts list with success message
        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    // Menampilkan form untuk mengedit posting
    public function edit($id)
    {
        // Find the post to edit
        $post = Post::findOrFail($id);

        // Fetch all users for the user dropdown
        $users = User::all();

        // Pass both post and users to the view
        return view('admin.posts.edit', compact('post', 'users'));
    }

    // Memperbarui posting yang sudah ada
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Find the post to update
        $post = Post::findOrFail($id);

        // Update the post
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to posts list with success message
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    // Menghapus posting
    public function destroy($id)
    {
        // Find and delete the post
        Post::findOrFail($id)->delete();

        // Redirect to posts list with success message
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}

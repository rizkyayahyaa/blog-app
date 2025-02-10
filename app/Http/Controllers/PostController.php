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
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public'); // Simpan gambar ke storage
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath, // Simpan path gambar
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dibuat');
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

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'comments.user', 'comments.replies.user'])
            ->latest()
            ->paginate(10);

        return view('index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();

        return view('admin.posts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dibuat');
    }

    public function archive($id)
    {
        $post = Post::findOrFail($id);
        $post->is_archived = true;
        $post->save();

        return redirect()->route('mypost.index')->with('success', 'Post archived successfully');
    }

    // Menyimpan status arsip pada postingan
    public function storeArchive(Post $post)
    {
        // Mengubah status arsip pada postingan
        $post->update(['is_archived' => true]);

        return redirect()->route('mypost.index')->with('success', 'Post Archived Successfully');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $users = User::all();

        return view('admin.posts.edit', compact('post', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}

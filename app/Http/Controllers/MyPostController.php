<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MyPostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Mengambil semua post yang ada di database
        return view('mypost.mypost', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('mypost.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('mypost.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
{
    $post = Post::findOrFail($id);

    // Hapus gambar jika ada
    if ($post->image) {
        \Storage::delete('public/' . $post->image);
    }

    $post->delete();

    return redirect()->route('mypost.index')->with('success', 'Post deleted successfully!');
}



}

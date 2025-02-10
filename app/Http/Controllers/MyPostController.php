<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MyPostController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('mypost.index', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('mypost.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {

            if ($post->image) {
                \Storage::delete('public/' . $post->image);
            }

            $imagePath = $request->file('image')->store('posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('mypost.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if ($post->image) {
            \Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('mypost.index')->with('success', 'Post deleted successfully!');
    }
}

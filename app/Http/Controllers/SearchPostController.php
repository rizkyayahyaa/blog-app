<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchPostController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::when($search, function ($query) use ($search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('content', 'like', "%{$search}%")
                         ->orWhereHas('user', function ($query) use ($search) {
                             $query->where('name', 'like', "%{$search}%");
                         });
        })->paginate(10); // Menampilkan hasil pencarian dengan pagination

        return view('user.posts.index', compact('posts'));
    }
}

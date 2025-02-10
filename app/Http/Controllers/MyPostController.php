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
}

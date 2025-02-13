<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('mypost.index', compact('posts'));
    }
}

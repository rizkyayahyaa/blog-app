<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('index', ['posts' => $posts]);
    }
}

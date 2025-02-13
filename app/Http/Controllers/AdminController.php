<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Statistic;
use App\Models\Report;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data user
        $posts = Post::all(); // Mengambil semua data post
        $comments = Comment::all(); // Mengambil semua data comment
        $statistics = Statistic::all(); // Mengambil data statistics
        $laporans = Report::all(); // Mengambil semua data laporan

        return view('admin.index_admin', compact('users', 'posts', 'comments', 'statistics', 'laporans'));
    }
}

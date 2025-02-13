<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Statistic;
use App\Models\Report;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data yang dibutuhkan
        $users = User::all(); // Mengambil semua data user
        $posts = Post::all(); // Mengambil semua data post
        $comments = Comment::all(); // Mengambil semua data comment
        $statistics = Statistic::all(); // Mengambil data statistics
        $laporans = Report::all(); // Mengambil semua data laporan

        // Ambil statistik post per user
        $postStats = DB::table('posts')
            ->select(DB::raw('user_id, count(*) as post_count'))
            ->groupBy('user_id')
            ->get();

        // Menyediakan data untuk chart
        $userIds = $postStats->pluck('user_id'); // Mendapatkan daftar user_id
        $postCounts = $postStats->pluck('post_count'); // Mendapatkan jumlah postingan per user

        return view('admin.index_admin', compact('users', 'posts', 'comments', 'statistics', 'laporans', 'userIds', 'postCounts'));
    }
}


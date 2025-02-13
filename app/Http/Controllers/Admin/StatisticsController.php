<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
        // Mengambil statistik posting per user
        $statistics = DB::table('posts')
            ->select(DB::raw('user_id, count(*) as post_count'))
            ->groupBy('user_id')
            ->get();

        // Menyediakan data untuk chart
        $users = $statistics->pluck('user_id'); // Mendapatkan daftar user_id
        $postCounts = $statistics->pluck('post_count'); // Mendapatkan jumlah postingan per user

        return view('admin.statistics.index', compact('users', 'postCounts'));
    }
}


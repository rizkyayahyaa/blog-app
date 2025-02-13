<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchPostController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort'); // Ambil parameter sort

        $posts = Post::query();

        // Jika ada pencarian
        if ($search) {
            $posts = $posts->where('title', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%")
                        ->orWhereHas('user', function ($query) use ($search) {
                            $query->where('name', 'like', "%{$search}%");
                        });
        }

        // Sorting berdasarkan 'sort' parameter
        if ($sort == 'latest') {
            $posts = $posts->orderBy('created_at', 'desc');
        } elseif ($sort == 'oldest') {
            $posts = $posts->orderBy('created_at', 'asc');
        } else {
            // Default sorting berdasarkan terbaru
            $posts = $posts->orderBy('created_at', 'desc');
        }

        // Pagination dengan 10 hasil per halaman
        $posts = $posts->paginate(10);

        return view('user.posts.index', compact('posts'));
    }


}

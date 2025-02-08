<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Kamu bisa menambahkan data jika diperlukan
        return view('admin.index_admin');
    }
}


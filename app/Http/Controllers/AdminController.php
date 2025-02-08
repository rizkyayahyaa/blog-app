<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index()
    {
        // Jika role adalah 'admin', arahkan ke halaman admin
        if (Auth::user()->role == 'admin') {
            return redirect()->route('index_admin');
        }

        return view('admin.index_admin'); // Tampilan untuk user biasa
    }
}


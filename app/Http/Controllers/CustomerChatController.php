<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerChatController extends Controller
{
    public function index()
    {
        return view('customers.customer-chat'); // HARUS sesuai dengan lokasi view
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(request $request)
    {
        return view('pages.home');
    }
}

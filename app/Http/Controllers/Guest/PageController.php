<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home', ['movies' => Movie::all(), 'heading' => 'This is the site Home']);
    }

    public function about()
    {
        return view('about', ['heading' => 'This is the About page']);
    }
}

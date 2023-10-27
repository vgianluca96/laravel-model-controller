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
        return view('about', ['movies' => Movie::all(), 'heading' => 'This is the About page']);
    }

    public function padrino()
    {
        return view('il-padrino', ['movies' => Movie::all(), 'heading' => 'Il Padrino']);
    }
}

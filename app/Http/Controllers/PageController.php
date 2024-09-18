<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Comic;
use App\Http\Controllers\ComicController;



class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();


        return view('home', compact('comics'));
    }
}

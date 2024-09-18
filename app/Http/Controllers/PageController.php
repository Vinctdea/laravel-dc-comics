<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Layout base - HOME';
        $text = 'Lorem ipsum dolor sit s.';
        return view('home', compact('text', 'title'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $news = news::all();
        return view('blog', compact('news'));
    }


}

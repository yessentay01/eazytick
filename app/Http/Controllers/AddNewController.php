<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddNewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->id == 8) {
            return view('addNews');
        }else {
            return view('welcome');
        }
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'img' => 'required',
            'date' => 'required',
            'text' => 'required',
        ]);

        news::create($request->post());

        return redirect()->route('home');

    }
}

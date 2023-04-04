<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Item $item)
    {
        $messages = Search::all();
        return view('search', compact('messages', 'item'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'post_id' => 'required'
        ]);

        Search::create($request->post());

        return redirect()->route('search', $request->post()['post_id'])->with('success','Success');
    }
}

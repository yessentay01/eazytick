<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\news;
use App\Models\Search;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::all();
        $messages = Search::all();
        $users = User::all();
        $news = news::all();
        $tickets = Ticket::all();
        if (Auth::user()->id == 8) {
            return view('home', compact('messages', 'users', 'items', 'news', 'tickets'));
        }else {
            return view('welcome');
        }
    }
    public function delete($id){
        $new = DB::table('news')->where('id', $id)->get();
        dd($new);
    //    $new->delete();
   //     return redirect()->route('home');
    }
}

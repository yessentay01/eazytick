<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Item;
use App\Models\Search;
use App\Models\Ticket;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function index()
    {
        $information =  DB::table('information')->where('user_id', Auth::user()->id)->latest()->get();
        //dd($information);
        $comments = DB::table('searches')->where('email', Auth::user()->email)->get();
        $posts = Item::all();
        $tickets = DB::table('tickets')->where('user_id', Auth::user()->id)->get();
        return view('profile', compact('comments', 'posts', 'tickets', 'information'));
    }

    public function userprofile($email){
        $userinfo = DB::table('users')->where('email', $email)->get();
        return view('userprofile', compact('userinfo'));
    }

    public function ticket($ticket_id){
        $ticket = DB::table('tickets')->where('id', $ticket_id)->get();
        $event = DB::table('items')->where('name', $ticket[0]->event)->get();
       // dd($event);
        $pdf = PDF::loadView('ticketPDF', compact('ticket', 'event'));
        return $pdf->stream('ticketPDF.pdf');
    }

    public function store(Request $request){
        $request->validate([
            'about' => 'required',
            'interest' => 'required'
        ]);

        Information::create($request->post());

        return redirect()->route('profile');

    }

}

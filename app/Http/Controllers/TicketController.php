<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(Item $item)
    {
        return view('tickets', compact('item'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'sector' => 'required',
            'row' => 'required',
            'place' => 'required',
            'price' => 'required',
            'cardnumber' => 'required',
            'fullname' => 'required',
            'expiration' => 'required',
            'cvv' => 'required',
            'user_id' => 'required',
            'event_id' => 'required',
        ]);

        Ticket::create($request->post());

        return redirect()->route('search', $request->post()['event_id'])->with('success','Success');
    }


}

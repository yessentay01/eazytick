<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function deleteEvent(Request $request){
        DB::table('items')->delete($request->id);
        return redirect()->route('home');
    }
    public function deleteUser(Request $request){
        DB::table('users')->delete($request->id);
        return redirect()->route('home');
    }
    public function deleteComment(Request $request){
        DB::table('searches')->delete($request->id);
        return redirect()->route('home');
    }
    public function deleteTicket(Request $request){
        DB::table('tickets')->delete($request->id);
        return redirect()->route('home');
    }
    public function deleteNew(Request $request){
        DB::table('news')->delete($request->id);
        return redirect()->route('home');
    }

}

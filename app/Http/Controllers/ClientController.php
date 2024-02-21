<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function homepage(Request $request){
        return view('client_panel.pages.Homepage');
    }
    public function janta(Request $request){
        return view('client_panel.pages.Janta-darbar');
    }
    public function rally(Request $request){
        return view('client_panel.pages.rally');
    }
    public function staff(Request $request){
        return view('client_panel.pages.staff');
    }
    public function upcoming_event(Request $request){
        return view('client_panel.pages.upcomming_eventp');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function homepage(Request $request){
        return view('client_panel.pages.Homepage');
    }
}

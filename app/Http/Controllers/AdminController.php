<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        return view('admin_panel.pages.login');
    }
    public function login_auth(Request $request){
        return $request;
    }
    public function janta(Request $request){
        $user = array("name"=>"ayush" , "emp_dp"=> "");
        return view('admin_panel.pages.Janta-darbar' , compact('user'));
    }
    public function rally(Request $request){
        return view('admin_panel.pages.rally');
    }
    public function staff(Request $request){
        return view('admin_panel.pages.staff');
    }
    public function upcoming_event(Request $request){
        return view('admin_panel.pages.upcomming_event');
    }
}

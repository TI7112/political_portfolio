<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use App\Models\JantaDarbar;
use App\Models\Rally;
use App\Models\UpcommingEvent;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        return view('admin_panel.pages.login');
    }

    public function janta(Request $request)
    {
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        $jantadarbar = JantaDarbar::orderBy('created_at' , "DESC")->get();
        return view('admin_panel.pages.Janta-darbar', compact('sessionUser' , 'jantadarbar' ));
    }
    
    public function rally(Request $request)
    {
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        $rally = Rally::orderBy('created_at' , "DESC")->get();
        return view('admin_panel.pages.rally' , compact('sessionUser' , 'rally'));
    }
    
    public function staff(Request $request)
    {
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        $contact_person = ContactPerson::orderBy('created_at' , "DESC")->get();
        return view('admin_panel.pages.contact_person' , compact('sessionUser' . 'contact_person'));
    }
    
    public function upcoming_event(Request $request)
    {
        $sessionUser = User::where('email', $request->session()->get('user'))->where('remember_token', $request->session()->get('token'))->first();
        $upcomming_event = UpcommingEvent::orderBy('created_at' , "DESC")->get();
        return view('admin_panel.pages.upcomming_event' , compact('sessionUser' , 'upcomming_event' ));
    }


    /**********************  post route  ******************/

    public function login_auth(Request $request)
    {
        $user = User::where("email", "$request->phone")->orWhere("phone", "$request->phone")->first();

        if (isset($user)) {
            if ($user->password == md5($request->password)) {
                $user->remember_token = $request->_token;
                $user->save();
                $request->session()->put('user', $user->email);
                $request->session()->put('token', "$request->_token");
                return redirect('/admin/janta');
            } else {
                return redirect()->back()->with("fail",  "Incorrect password");
            }
        } else {
            return redirect()->back()->with("fail",  "no user found");
        }
    }

    public function add_janta_darbar(Request $request)
    {
                // return $request;
                $jantadarbar = new JantaDarbar();

                $jantadarbar->title = $request->name;
                $jantadarbar->slug = sha1(date('YmdHis')).sha1($request->_token);
                $jantadarbar->agenda = $request->agenda;
                $jantadarbar->start_date = $request->start_date;
                $jantadarbar->end_date = $request->end_date;
                $jantadarbar->status = "active";
                $jantadarbar->location = $request->location;
                $jantadarbar->author = "Ayushjha7112";
        
                if($request->file('thumbnail')){
                    $file= $request->file('thumbnail');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path("assets/uploads") , $filename );
                    $jantadarbar->image = $filename;
                }
        
                $jantadarbar -> save();
                // return print_r($jantadarbar->toArray());
                return redirect()->back()->with('success' , "Janta Darbar uploaded");
            
    }

    public function add_rally(Request $request)
    {
        // return $request;
        $rally = new Rally();

        $rally->title = $request->name;
        $rally->slug = sha1(date('YmdHis')).sha1($request->_token);
        $rally->contact_person = $request->contact_person;
        $rally->start_time = $request->start_time;
        $rally->end_time = $request->end_time;
        $rally->event_date = $request->event_date;
        $rally->location = $request->location;
        $rally->author = "Ayushjha7112";

        if($request->file('thumbnail')){
            $file= $request->file('thumbnail');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path("assets/uploads") , $filename );
            $rally->image = $filename;
        }

        $rally -> save();
        return redirect()->back()->with('success' , "Rally uploaded");
    }

    public function add_contact_person(Request $request)
    {
        // return $request;
        $contactperson = new ContactPerson();

        $contactperson->title = $request->name;
        $contactperson->slug = sha1(date('YmdHis')).sha1($request->_token);
        $contactperson->email = $request->email;
        $contactperson->phone = $request->phone;
        $contactperson->work_area = $request->work_area;

        if($request->file('thumbnail')){
            $file= $request->file('thumbnail');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path("assets/uploads") , $filename );
            $contactperson->image = $filename;
        }

        $contactperson -> save();
        // return print_r($contactperson->toArray());
        return redirect()->back()->with('success' , "Contact Person uploaded");
    
    }

    public function add_upcomming_event(Request $request)
    {
            // return $request;
            $upcomming_event = new UpcommingEvent();

            $upcomming_event->title = $request->name;
            $upcomming_event->slug = sha1(date('YmdHis')).sha1($request->_token);
            $upcomming_event->event_date = $request->event_date;
            $upcomming_event->description = $request->description;
            $upcomming_event->author = "Ayushjha7112";
    
            if($request->file('thumbnail')){
                $file= $request->file('thumbnail');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path("assets/uploads") , $filename );
                $upcomming_event->image = $filename;
            }
    
            $upcomming_event -> save();
            // return print_r($upcomming_event->toArray());
            return redirect()->back()->with('success' , "Upcomming Event uploaded");
        
    }
}

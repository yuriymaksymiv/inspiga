<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
//        dd($request->all());
        $newContact = New Contact;
        $newContact->create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);

        if($newContact) {
            return redirect()->route('home');
        }

        return redirect()->route('home');
    }
}

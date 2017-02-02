<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the settings account.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('settings');
    }

    public function home(){
        
        $members = \DB::table('members')
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();

        $numMemb = \DB::table('members')
                ->count();


        return view('h',compact('members','numMemb'));

    }
}

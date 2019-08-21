<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        // $user = Auth::user();
        // dd($user);
        //session('email')  
        $user = UserInfo::where('email',session('email'))->first();
        return view('dashboard', compact('user'));
    }
}

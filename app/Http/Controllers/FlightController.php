<?php

namespace App\Http\Controllers;
use App\flight;
use Illuminate\Http\Request;
use App\UserInfo;

class FlightController extends Controller
{
    
    public function search(Request $request) {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        $flights= flight::where('flyingFrom', $request->leaving)
        ->where('flyingTo', $request->going)
        ->where('dept', $request->departure)
        ->where('ret', $request->return)
        ->get();
    	// dd($flight);
        $user = UserInfo::where('email',session('email'))->first();
        return view('Flight.search',compact(['flights','user']));
        
    }
}

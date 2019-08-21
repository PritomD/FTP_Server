<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\content;

class MemberController extends Controller
{
    public function memberhome(Request $request){

    	return view('member/index');
    }

    public function banglamovie(Request $request){

    	$cont = content::where('type', 'Bangla')
        // ->where('flyingTo', $request->going)
        // ->where('dept', $request->departure)
        // ->where('ret', $request->return)
        ->get();
        dd($cont);

    	return view('member.banglamoviecontent', compact('cont'));
        // return view('Flight.search',compact(['flights','user']));

    }
}

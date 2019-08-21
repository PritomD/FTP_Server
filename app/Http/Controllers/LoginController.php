<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UserInfo;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){

    	return view('login.index')->with('name', $request->name);
    }

    public function verify(Request $request){
    	
    	$uname = $request->uname;
    	$password = $request->input('password');
     
        $user = DB::table('userinfo')
                ->where('username', $uname)
                ->where('password', $password)
                ->first();

		if($user != null){

            $request->session()->put('email', $user->email);
            
			return redirect()->route('dashboard');
		}else{
			
			$request->session()->flash('message', 'Invalid username or password');
			return redirect()->route('login.index', ['name'=>$uname]);
		}
    	
    }
}

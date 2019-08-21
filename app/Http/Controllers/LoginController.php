<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use App\admin;


class LoginController extends Controller
{
    public function index(Request $request){

    	return view('login.index')->with('name', $request->name);
    }

    public function verify(Request $request){
        
        $uname = $request->uname;
        $password = $request->input('password');
     
        $user = DB::table('admin')
                ->where('username', $uname)
                ->where('password', $password)
                ->first();

        if($user != null){

            $request->session()->put('email', $user->email);
            
            return redirect()->route('admin.home');
        }else{
            
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login.index', ['name'=>$uname]);
        }
        
    }
}

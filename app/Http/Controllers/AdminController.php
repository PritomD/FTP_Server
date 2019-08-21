<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;

class AdminController extends Controller
{
    public function index(Request $request){

    	return view('signup.index');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'email'=>'bail|Required|unique:accounts',
        //     'username'=>'Required'
        // ]);
        //dd($request);
        $user = new admin();
        $user->username             = $request->username;
        $user->email           = $request->email;
        $user->password           = $request->password;

        $user->save();

        // $this->validateInput($request);
        //  UserInfo::create([
        //     'username' => $request['username'],
        //     'email' => $request['email'],
        //     'password' => bcrypt($request['password']),
        //     'firstname' => $request['firstname'],
        //     'lastname' => $request['lastname']
        // ]);
        //  $path = $request->file('logo')->store('avatars');
        //  $input['logo'] = $path;

        //  UserInfo::create($input);

        return redirect()->intended('admin/home');
    }
}

<?php

namespace App\Http\Controllers;
use App\UserInfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
     * Show the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        //$user = UserInfo::where('email',session('email'))->first();
        //$users = UserInfo::find($id);
        // dd($user);
        // || count($user) == 0
        // Redirect to user list if updating user wasn't existed
        $user = UserInfo::where('email',session('email'))->first();
        $users = $user;
        return view('profile', compact(['users','user']));
        //return view('profile');
    }
    public function update(Request $request)
    {
        
        if ($request->hasFile('image')) {
            //dd($request);
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        //$this->save();
        $user = UserInfo::where('email',session('email'))->first();
        $id = $user->id;

        $user = UserInfo::find($id);
        $user->username           = $request->username;
        $user->firstname           = $request->firstname;
        $user->lastname           = $request->lastname;
        $user->logo           = $name;
        $user->save();
        
        return redirect()->route('dashboard');
        }
        else
            return back();
        
    }
}

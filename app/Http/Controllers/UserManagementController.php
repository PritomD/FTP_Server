<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserInfo;
use App\balance;

class UserManagementController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = '/user-management';

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        $users = UserInfo::paginate(5);
        $user = UserInfo::where('email',session('email'))->first();
        return view('users-mgmt/index', compact(['users','user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        $user = UserInfo::where('email',session('email'))->first();
        return view('users-mgmt/create',     compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'bail|Required|unique:accounts',
            'username'=>'Required'
        ]);
        //dd($request);
        $user = new UserInfo();
        $user->username             = $request->username;
        $user->email           = $request->email;
        $user->usertype           = $request->usertype;
        $user->password           = $request->password;
        $user->firstname   = $request->firstname;
        $user->lastname   = $request->lastname;

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

        return redirect()->intended('/user-management');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        $users = UserInfo::find($id);
        // dd($user);
        // || count($user) == 0
        // Redirect to user list if updating user wasn't existed
        if ($users == null ) {
            return redirect()->intended('/user-management');
        }
        $user = UserInfo::where('email',session('email'))->first();
        return view('users-mgmt/edit', compact(['users','user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if ($request->hasFile('image')) {
            //dd($request);
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        //$this->save();

        $user = UserInfo::find($id);
        $user->username           = $request->username;
        $user->firstname           = $request->firstname;
        $user->lastname           = $request->lastname;
        $user->logo           = $name;
        $user->save();
        
        return redirect()->intended('/user-management');
        }
        else
            return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserInfo::where('id', $id)->delete();
         return redirect()->intended('/user-management');
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) 
    {
        if(session('email') == null){
            return redirect()->route('login.index');
        }
        $constraints = [
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department']
            ];

       $users = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $users, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = UserInfo::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'username' => 'required|max:20',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
        'firstname' => 'required|max:60',
        'lastname' => 'required|max:60'
    ]);
    }

    public function balance(Request $request) 
    {
        $user = UserInfo::where('email',session('email'))->first();
        return view('users-mgmt/uploadbal', compact('user'));
    }

    public function uploadbal(Request $request) 
    {
        $bal = new balance();
        $bal->acctype             = $request->acctype;
        $bal->amount           = $request->amount;
        $bal->medium           = $request->medium;
        $bal->cardtype           = $request->ctype;
        $bal->confee   = $request->confee;
        $bal->totalprice   = $request->tprice;
        $bal->save();

        $users = UserInfo::where('email',session('email'))->first();
        $id = $users->id;
        $user = UserInfo::find($id);
        $user->amount   = $request->amount;
        $user->save();

        // $user = UserInfo::where('email',session('email'))->first();
        return redirect()->route('dashboard');
    }
}

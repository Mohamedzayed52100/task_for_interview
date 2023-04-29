<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    
    public function website(){
        return view('website');
    }

    public function showLogin(){
        return view('login');
    }

    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
        
        // validation
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:patient',
            'password' => 'required|confirmed'
        ]);

        // store data in database
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $passwordEnc = Hash::make($password);
        DB::insert('insert into patient(name, email, password) values(?, ?, ?)', [$name, $email, $passwordEnc]);

        // mark user as logged in
        $userId = DB::getPdo()->lastInsertId();
        $result = DB::select('select patient_id, name, email from patient where patient_id = ?', [$userId]);
        $user = null;
        if($result){
            $user = $result[0];
            session()->regenerate();
            session([
                'loggedIn' => true,
                'userId' => $user->patient_id,
                'userName' => $user->name,
                'userEmail' => $user->email,
                'user' => $user
            ]);
        }
        if($user == null){
            return back()->with(['error' => 'Unexpected error happened during registration'])->withInput();
        }
       

        // go to choice
        return redirect('/homewebsite')->with(['success_message' => 'Your account was successfully created!']);
    }

    public function login(Request $request){

        // validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from patient where email = ?', [$email]);
        if(!$result){
            return back()->with(['error' => 'This email is not found'])->withInput();
        }
        $user = $result[0];

        // check password
        if(!Hash::check($password, $user->password)){
            return back()->with(['error' => 'Incorrect password'])->withInput();
        }

        // mark user as logged in
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $user->patient_id,
            'userName' => $user->name,
            'userEmail' => $user->email,
            'user' => $user
        ]);

        // go to home
        return redirect('/homewebsite');
    }

    public function logout(){
        session()->invalidate();
        return redirect('/login');
    }
   
}

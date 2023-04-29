<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class TaskController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function signup(){
        return view('signup');
    }
    public function login(Request $request){

        $request->validate([
             
            'email'=>'required',
            'password'=>'required',
           
        ]);

        $email = $request->input('email');
        $password =$request->input('password');
        

        //$data =DB::table('users')->where('email'  , $email)->where('password' , $password)->get();

        // $data =DB::select('select * from users where email =? and password =? ' , [$email, $password]);
        // $data=$data[0];

        $data =DB::table('users')->where('email'  , $email)->where('password' , $password)->first();

        
if($data->status) {
    session([
        'user_login'=>true, 
        'user'=>$data,

    ]);
    return redirect('/profile');
}
        
        
        else   return redirect('/')->with('wait_user' , 'wait till admin make your status true ');

            // return view('userprofile'  , get_defined_vars());
        // else 
        // return redirect('/')->with('wait_user' , 'wait till admin make your status true ');


      



    }

    public function profile(){
        return view('userprofile');
    }


    public function logout(){
        session()->regenerate();
        session()->invalidate();
        return redirect('/');

    }
    public function signup_submit(Request $request){
        $email=$request->input('email');

        $domain = substr($email, strpos($email, '@') + 1);


        $vaidate_domain=DB::table('users')->where('domain',$domain)->get();

        if($vaidate_domain){
            return back()->with('domain_must_be_unique'  , 'the domain of email must be unique');
        }
        if($vaidate_domain== 'gmail.com'){
            return back()->with('domain_not_be_gmail'  , 'the domain of email must\'t  be gmail');
        }
        ///return $domain;
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'domain' => 'required|unique:users,domain',
            'password'=>['required',   Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()
            ->uncompromised()    
          ],
            'file'=>'required',
        ]);


        $name=$request->name;
        $email=$request->input('email');
        $password=$request->input('password');
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $user =new User();
        $user->name = $name;
        $user->image = $imageName;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return redirect('/send');
        



    }
}

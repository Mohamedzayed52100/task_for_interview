<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login_admin_submit(Request $request){


        $data = User::where('status'  , 0)->get();
       // return $request->all();
       if($request->password==123456){
        return view('alluser' , get_defined_vars());
       }
       else {
        return back()->with('not_admin' , 'your passord is not vaild');
       }
    }
    public function verify($id){
        DB::table('users')->where('id',$id)->update([
            'status'=>1,
        ]);
        $data = User::where('status'  , 0)->get();
        return view('alluser' , get_defined_vars());
    }
}

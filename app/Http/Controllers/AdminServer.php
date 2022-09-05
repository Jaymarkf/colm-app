<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;

class AdminServer extends Controller
{
    function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = AdminLogin::first();

        if($data->username == $username && $data->password == md5($password)){
            $request->session()->put('login',$data->id);
            return redirect('admin-dashboard');
        }else{
            return back()->with('fail',"Credentials are incorrect! Try again");
        }

    }

    function add_new_carousel(Request $request){
     
    }
}

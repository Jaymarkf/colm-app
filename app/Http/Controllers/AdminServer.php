<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use App\Models\CarouselBanner;
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
       $image = $request->file("new_carousel");
       $file_name = time().'_'.$image->getClientOriginalExtension();
       //use intervention
       $img = \Image::make($image);
       //convert to webp
       $img->encode('webp');
       //save it as webp
       $img->save(storage_path('app/public/images/carousel/'.$file_name . '.webp'),9);
       $carousel = new CarouselBanner();
       $carousel->banner_name = "test";
       $carousel->banner_link = "https://wew";
       $carousel->banner_link_blurb	 ="hahah";
       $carousel->banner_blurb ="ade wow";
       $carousel->save();
    }
}

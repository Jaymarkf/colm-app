<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use App\Models\CarouselBanner;
use Illuminate\Support\Facades\Validator;

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



       $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd','webp'];
       $image = $request->file("new_carousel");
       $image_name = $image->getClientOriginalName();
       $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml','image/webp'];
       $explodeImage = explode('.', $image_name);
       $extension = end($explodeImage);
       $validator = null;
       if(in_array($extension , $imageExtensions) && in_array($image->getClientMimeType(), $allowedMimeTypes)){

       $file_name = time().'_'.$image->getClientOriginalExtension();
       //use intervention
       $img = \Image::make($image);
       //convert to webp
       $img->encode('webp');
       //save it as webp
       $img->save(storage_path('app/public/images/carousel/'.$file_name . '.webp'),9);
       $db_carousel = new CarouselBanner(); 
       $db_carousel->banner_name = $file_name . '.webp';

       
       $button_blurb = $request->button_caption;
       $button_link = $request->button_link;
       $banner_context = $request->banner_blurb;

       if($button_blurb == '' || $button_blurb == NULL ){
         $button_blurb = '';
       }

       if($button_link == '' || $button_link == NULL ){
        $button_link = '';
       }

       if($banner_context == '' || $banner_context == NULL ){
        $banner_context = '';
       }



       $db_carousel->banner_link_blurb = $button_blurb; 
       $db_carousel->banner_link = $button_link;
       $db_carousel->banner_blurb = $banner_context; 
       $db_carousel->save();

       }else{
        //not an image

       }

     
        
    }
}

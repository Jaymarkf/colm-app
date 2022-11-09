<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use App\Models\CarouselBanner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
       $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd','webp'];
       $image = $request->file("new_carousel");
       $image_name = $image->getClientOriginalName();
       $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/webp'];
       $explodeImage = explode('.', $image_name);
       $extension = end($explodeImage);
       if(in_array($extension , $imageExtensions) && in_array($image->getClientMimeType(), $allowedMimeTypes)){
            $file_name = time().'_'.$image->getClientOriginalExtension();
            //use intervention
            $img = \Image::make($image);
            //convert to webp
            $img->encode('webp');
            //save it as webp
            $img->save(storage_path('app/public/images/carousel/'.$file_name.'.webp'),80,'webp');
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
            return redirect()->back()->with('success', 'image successfully uploaded');   
       }else{
        //not an image
        return back()->withErrors(['msg' => 'file not accepted. please choose jpg/png/bmp/jpeg only.']);
       }
    }
    function manage_carousel(Request $request){
       if($request->path() == "/"){
        $temp = CarouselBanner::all();
        $banner_context = array();
        foreach($temp as $val){
            $banner_context['banner_image'][] = "/storage/images/carousel/". $val->banner_name;
            $banner_context['banner_link'][] = $val->banner_link;
            $banner_context['banner_blurb'][] = $val->banner_blurb;
        }
        return view('dashboard',['banner_context' => $banner_context]);
       }else{
        $banner = CarouselBanner::all();
        return view('admin-dashboard.pages.manage-carousel',['banner_images' => $banner]);
       }
    }
    function edit_carousel(Request $r){
       $sql = CarouselBanner::where('id','=',$r->banner_id)->get()->first();;
       return $sql;
    }

    function update_delete_carousel(Request $request){
        if($request->file()){
            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd','webp'];
            $image = $request->file("banner_file");
            $image_name = $image->getClientOriginalName();
            $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/webp'];
            $explodeImage = explode('.', $image_name);
            $extension = end($explodeImage);
            if(in_array($extension , $imageExtensions) && in_array($image->getClientMimeType(), $allowedMimeTypes)){
                //delete existing image file first
                $temp = CarouselBanner::where('id' ,'=',$request->banner_ids)->get()->first();
                $image_file = $temp->banner_name;
                Storage::delete('/public/images/carousel/'.$image_file);

                $file_name = time().'_'.$image->getClientOriginalExtension();
                //use intervention
                $img = \Image::make($image);
                //convert to webp
                $img->encode('webp');
                //save it as webp
                $img->save(storage_path('app/public/images/carousel/'.$file_name. '.webp'),80,'webp');

            
                        $button_blurb = $request->button_caption;
                        $button_link = $request->banner_link;
                        $banner_context = $request->banner_context;
                        $update = ['banner_name' => $file_name . '.webp',
                                'banner_link' => $button_link,
                                'banner_link_blurb' => $button_blurb,
                                'banner_blurb' => $banner_context
                                ];

                        $response = DB::table('carousel_banners')
                            ->where('id', $request->banner_ids)
                            ->update($update);
                        return redirect()->back()->with('success', 'image was successfully edited!.');  
                
            }else{
                return back()->withErrors(['msg' => 'file not accepted. please choose jpg/png/bmp/jpeg only.']);
            }
        }else{
            //save only blurb
            $button_blurb = $request->button_caption;
            $button_link = $request->banner_link;
            $banner_context = $request->banner_context;
            $update = ['banner_link' => $button_link,
                       'banner_link_blurb' => $button_blurb,
                       'banner_blurb' => $banner_context
                      ];

            DB::table('carousel_banners')
                ->where('id', $request->banner_ids)
                ->update($update);
            return redirect()->back()->with('success', 'image was successfully edited!.');  
        }
    }
}

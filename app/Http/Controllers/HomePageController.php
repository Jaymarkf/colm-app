<?php

namespace App\Http\Controllers;

use App\Models\HomeImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HomePageController extends Controller
{
    //
    public function manage_images_index()
    {
        $homeImages = HomeImage::all();
        return view('admin-dashboard.pages.manage-home-images')
            ->with('homeImages', $homeImages);
    }

    public function manage_images_edit(int $id)
    {
        $homeImage = HomeImage::find($id);
        return view('admin-dashboard.pages.view-home-image')
            ->with('homeImage', $homeImage);
    }

    public function updated_image(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'file|mimes:jpg,png',
        ]);

        try {
            $homeImage = HomeImage::find($id);

            DB::beginTransaction();
            $newFileName = "";
            if ($request->hasFile('image')) {
                File::delete('storage/home_images/' . $homeImage->content);
                $getHomeImage = $request->file('image');
                $newFileName = Str::uuid() . '-' . date('Y-m-d His') . '.' . $getHomeImage->getClientOriginalExtension();
                $getHomeImage->storeAs('public/home_images', $newFileName);
            }

            $homeImage->content = json_encode([
                "name" => $request->name,
                "url" => $newFileName,
            ]);

            $homeImage->save();

            DB::commit();

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}

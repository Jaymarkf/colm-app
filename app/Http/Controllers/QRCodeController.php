<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use App\Models\QRCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class QRCodeController extends Controller
{
    //
    function GenerateStatic(){
        $pdf = App::make('dompdf.wrapper');
        $qr_code = QRCode::all();
        $html = '';
        foreach($qr_code as $img){
            $html =  $html.'<img src="storage/qr_images/'.$img->filename.'"  style="width:96%;max-width:100%;height:96%;"/>';
        }
        $pdf->loadHTML($html)->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    function client_qrcode(){
        $qr = QRCode::all();
        return view('qr-code')->with('images',$qr);
    }



    function index(){
        $qrCode = QRCode::all();
        return view('admin-dashboard.pages.qrcode')->with('qrCode',$qrCode);
    }
    function store(Request $request){
        $request->validate([
            'qr_image' => 'required|file|mimes:jpg,png',
        ]);

        try {
            DB::beginTransaction();

            $getEventImage = $request->file('qr_image');
            $newFileName = Str::uuid() . '-' . date('Y-m-d-His') . '.' . $getEventImage->getClientOriginalExtension();

            $getEventImage->storeAs('public/qr_images', trim($newFileName));

            $newqr_img = new QRCode([
                'filename' => trim($newFileName),
            ]);

            $newqr_img->save();

            DB::commit();
            return redirect()->back()->with('success', 'File uploaded successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('An error occurred: ' . $e->getMessage());
            // Return a redirect response with an error message
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }

    }
    function edit(Request $request){
        $request->validate([
            'qr_image' => 'required|file|mimes:jpg,png',
        ]);
        $id = $request->edit_qr_id;
        $img = $request->qr_image;
        try{
            $qrcode = QRCode::find($id);
            DB::beginTransaction();
            $current_filename = $request->file('qr_image');
            File::delete('storage/qr_images/'.$qrcode->filename);
            $newFileName = Str::uuid() . '-' . date('Y-m-d-His') . '.' . $current_filename->getClientOriginalExtension();
            $current_filename->storeAs('public/qr_images/', $newFileName);
            $qrcode->filename = $newFileName;
            $qrcode->save();
            DB::commit();
            return redirect()->back()->with('success','File name has changed');
        }catch(\Exception $e){
            DB::rollBack();
            redirect()->back()->with("error",$e);
        }

    }
    function destroy($id){
          try {
            DB::beginTransaction();
            $id_delete = QRCode::find($id);
            File::delete('storage/qr_images/' . $id_delete->filename);
            $id_delete->delete();

            DB::commit();
            return redirect()->route('qrcode.index');
        } catch (\Exception $e) {
            return redirect()->route('qrcode.index');
        }
    }
}

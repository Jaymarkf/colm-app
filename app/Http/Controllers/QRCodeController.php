<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class QRCodeController extends Controller
{
    //
    function GenerateStatic(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('
                <img src="images/Brochure_Page1.jpg"  style="width:96%;max-width:100%"/>
                <img src="images/Brochure_Page2.jpg" style="width:96%;max-width:100%" />'
        )->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}

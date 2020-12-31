<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{

    public function pdfReport(){
        $data=[
            'title' => 'Southern Cart',

            'date' => date('m/d/Y')
        ];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('report.pdf');

    
    }

}

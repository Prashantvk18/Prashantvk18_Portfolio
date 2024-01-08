<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadPdfController extends Controller
{
    public function download_pdf () {
        $file = public_path('cv\PRASHANT PARASKUMAR JAIN CV.pdf');
// dd($file);
        return Response::download($file, 'PRASHANT PARASKUMAR JAIN CV.pdf');
    }
}

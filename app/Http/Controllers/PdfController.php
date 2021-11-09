<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PdfController extends Controller
{
    public function pdf($id, Pasien $pasien)
    {
        // $pasien = Pasien::all();
        $pasien = new Pasien;
        $data = $pasien->findData($id);

        // QR Code
        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate(\Request::url()));

        $pdf = \PDF::loadView('data.pdf', ["pasien"=>$data, "title"=>"Data Pasien", "qrcode"=>$qrcode]);
        return $pdf->stream('data-pasien.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request, Pasien $pasien)
    {
        // $nov = \DB::table('pasien')
        // ->select([
        //     \DB::raw('count(*) as jumlah'),
        // ])
        // ->whereMonth('created_at', '=', '11')
        // ->whereYear('created_at', '=', '2021')
        // ->groupBy('MONTH(created_at)')
        // ->orderBy('tanggal','desc')
        // ->get();
        // ->toArray()
        // dd($nov);
        $jan = \DB::table('pasien')->whereMonth('tgl_tes', '=', '01')->whereYear('tgl_tes', '=', '2021')->count();
        $feb = \DB::table('pasien')->whereMonth('tgl_tes', '=', '02')->whereYear('tgl_tes', '=', '2021')->count();
        $mar = \DB::table('pasien')->whereMonth('tgl_tes', '=', '03')->whereYear('tgl_tes', '=', '2021')->count();
        $apr = \DB::table('pasien')->whereMonth('tgl_tes', '=', '04')->whereYear('tgl_tes', '=', '2021')->count();
        $mei = \DB::table('pasien')->whereMonth('tgl_tes', '=', '05')->whereYear('tgl_tes', '=', '2021')->count();
        $jun = \DB::table('pasien')->whereMonth('tgl_tes', '=', '06')->whereYear('tgl_tes', '=', '2021')->count();
        $jul = \DB::table('pasien')->whereMonth('tgl_tes', '=', '07')->whereYear('tgl_tes', '=', '2021')->count();
        $ags = \DB::table('pasien')->whereMonth('tgl_tes', '=', '08')->whereYear('tgl_tes', '=', '2021')->count();
        $sep = \DB::table('pasien')->whereMonth('tgl_tes', '=', '09')->whereYear('tgl_tes', '=', '2021')->count();
        $okt = \DB::table('pasien')->whereMonth('tgl_tes', '=', '10')->whereYear('tgl_tes', '=', '2021')->count();
        $nov = \DB::table('pasien')->whereMonth('tgl_tes', '=', '11')->whereYear('tgl_tes', '=', '2021')->count();
        $des = \DB::table('pasien')->whereMonth('tgl_tes', '=', '12')->whereYear('tgl_tes', '=', '2021')->count();

        return view('report.index',[
            "title" => "Report",
            "judultabel" => "Report",
            "pasien" => $pasien,
            "jan" => $jan,
            "feb" => $feb,
            "mar" => $mar,
            "apr" => $apr,
            "mei" => $mei,
            "jun" => $jun,
            "jul" => $jul,
            "ags" => $ags,
            "sep" => $sep,
            "okt" => $okt,
            "nov" => $nov,
            "des" => $des,
        ]);
    }
}

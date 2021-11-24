<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('about',[
            "title" => "Tentang",
            "judultabel" => "About",
            "name" => "Swab Antigen Test",
            "email" => "Swab antigen atau dikenal dengan rapid antigen bekerja dengan cara mendeteksi protein tertentu dari virus yang memunculkan respons kekebalan tubuh. Bila kamu ingin membuat janji pemeriksaan swab antigen atau rapid antigen di rumah sakit yang dekat dari rumah",
            "image" => "test.jpg"
         ]);
    }
}

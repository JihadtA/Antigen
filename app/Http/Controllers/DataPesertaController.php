<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        return view('datapeserta',[
            "title" => "Data Peserta",
            "judultabel" => "Data Peserta",
            
        ]);
    }
}

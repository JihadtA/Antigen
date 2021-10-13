<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTesController extends Controller
{
    public function index()
    {
        return view('datates',[
            "title" => "Data Tes",
            "judultabel" => "Data Tes",
            
        ]);
    }
}

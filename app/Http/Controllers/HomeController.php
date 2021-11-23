<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PasienController;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home',[
            "title" => "Home",
            "judultabel" => "Home",
            
        ]);
    }

    public function store(Request $request, Pasien $pasien)
    {
        $validator = \Validator::make($request->all(), [
            'no_lab'        => 'required',
            'no_rm'         => 'required',
            'nama'          => 'required',
            'nama_dok'      => 'required',
            'jns_kelamin'   => 'required',
            'umur'          => 'required',
            'tgl_lahir'     => 'required',
            'alamat'        => 'required|max:35',
            'no_hp'         => 'required',
            'lokasi'        => 'required',
            'tgl_tes'       => 'required',
            'igm'           => 'required',
            'igg'           => 'required',
            'metode'        => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $pasien->storeData($request->all());

        return response()->json(['success'=>'Pasien added successfully']);
    }
}

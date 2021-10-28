<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('data.pasien',[
            "title" => "Pasien",
            "judultabel" => "Data Pasien"
        ]);
    }

    public function getPasien(Request $request, Pasien $pasien)
    {
        $data = $pasien->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '
                    <button type="button" class="btn btn-primary btn-sm"><a href="/pasien/'.$data->id.'}" class ="text-decoration-none text-white" >Detail </a></button>
                    <button type="button" class="btn btn-success btn-sm" id="getEditPasienData" data-id="'.$data->id.'">Edit</button>
                    <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeletePasienModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->rawColumns(['Actions'])
            ->make(true);
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Pasien $pasien)
    {
        $validator = \Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jns_cek' => 'required',
            'hasil' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $pasien->storeData($request->all());

        return response()->json(['success'=>'Pasien added successfully']);
    }

    public function show(Pasien $pasien)
    {
        return view("data.detailpasien",[
            "title" => "Pasien",
            "judultabel" => "Data Pasien",
            "pasien" => $pasien
        ]);
    }

    public function detail($id)
    {
        $pasien = new Pasien;
        $data = $pasien->findData($id);
        $l = "Laki-Laki";
        $p = "Perempuan";

        $html = '<div class="form-group">
                    <label>NIK:</label>
                    <input type="text" class="form-control" name="nik" id="detailNik" value="'.$data->nik.'" readonly>
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama" id="detailNama" value="'.$data->nama.'" readonly>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <input type="text" class="form-control" name="jns_kelamin" id="detailJns_kelamin" value="'.$data->jns_kelamin.'" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" class="form-control" name="tmpt_lahir" id="detailTmpt_lahir" value="'.$data->tmpt_lahir.'" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="text" class="form-control" name="tgl_lahir" id="detailTgl_lahir" value="'.$data->tgl_lahir.'" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" class="form-control" name="alamat" id="detailAlamat" value="'.$data->alamat.'" readonly>
                </div>
                <div class="form-group">
                    <label>Jenis Pemeriksaan:</label>
                    <input type="text" class="form-control" name="jns_cek" id="detailJns_cel" value="'.$data->jns_cek.'" readonly>
                </div>
                <div class="form-group">
                    <label>Hasil Pemeriksaan:</label>
                    <input type="text" class="form-control" name="hasil" id="detailHasil" value="'.$data->hasil.'" readonly>
                </div>';

        return response()->json(['html'=>$html]);
    }

    public function edit($id)
    {
        $pasien = new Pasien;
        $data = $pasien->findData($id);
        $l = "Laki-Laki";
        $p = "Perempuan";

        
        $html = '<div class="form-group">
                    <label>NIK:</label>
                    <input type="text" class="form-control" name="nik" id="editNik" value="'.$data->nik.'">
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" class="form-control" name="nama" id="editNama" value="'.$data->nama.'">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <select class="form-control mb-1" name="jns_kelamin" id="editJns_kelamin" value="'.$data->jns_kelamin.'">
                        <option value="'.$l.'" @if(isset('.$pasien.')) @if('.$pasien->jns_kelamin.' == '.$l.') selected @endif @endif>'.$l.'</option>
                        <option value="'.$p.'" @if(isset('.$pasien.')) @if('.$pasien->jns_kelamin.' == '.$p.') selected @endif @endif>'.$p.'</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" class="form-control" name="tmpt_lahir" id="editTmpt_lahir" value="'.$data->tmpt_lahir.'">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="text" class="form-control" name="tgl_lahir" id="editTgl_lahir" value="'.$data->tgl_lahir.'">
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea class="form-control" name="alamat" id="editAlamat">'.$data->alamat.'</textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Pemeriksaan:</label>
                    <select class="form-control mb-1" name="jns_cek" id="editJns_cek" value="'.$data->jns_cek.'">
                        <option value="Rapid" @if(isset('.$pasien.')) @if('.$pasien->jns_cek.' == "Rapid") selected @endif @endif>Rapid</option>
                        <option value="Swap" @if(isset('.$pasien.')) @if('.$pasien->jns_cek.' == "Swap") selected @endif @endif>Swap</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Hasil Pemeriksaan:</label>
                    <select class="form-control mb-1" name="hasil" id="editHasil" value="'.$data->hasil.'">
                        <option value="Positif" @if(isset('.$pasien.')) @if('.$pasien->hasil.' == "Positif") selected @endif @endif>Positif</option>
                        <option value="Negatif" @if(isset('.$pasien.')) @if('.$pasien->hasil.' == "Negatif") selected @endif @endif>Negatif</option>    
                    </select>
                </div>';

        return response()->json(['html'=>$html]);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jns_cek' => 'required',
            'hasil' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $pasien = new Pasien;
        $pasien->updateData($id, $request->all());

        return response()->json(['success'=>'Pasien updated successfully']);
    }

    public function destroy($id)
    {
        $pasien = new Pasien;
        $pasien->deleteData($id);

        return response()->json(['success'=>'Pasien deleted successfully']);
    }
}

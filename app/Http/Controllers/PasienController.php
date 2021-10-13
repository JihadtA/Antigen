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
            "judultabel" => "Data Pasien",
        ]);
    }

    public function getPasien(Request $request, Pasien $pasien)
    {
        $data = $pasien->getData();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" class="btn btn-success btn-sm" id="getEditPasienData" data-id="'.$data->id.'">Edit</button>
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
        //
    }

    public function edit($id)
    {
        $pasien = new Pasien;
        $data = $pasien->findData($id);

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
                    <input type="text" class="form-control" name="jns_kelamin" id="editJns_kelamin" value="'.$data->jns_kelamin.'">
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
                    <input type="text" class="form-control" name="jns_cek" id="editJns_cek" value="'.$data->jns_cek.'">
                </div>
                <div class="form-group">
                    <label>Hasil Pemeriksaan:</label>
                    <input type="text" class="form-control" name="hasil" id="editHasil" value="'.$data->hasil.'">
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

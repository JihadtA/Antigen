<?php

namespace App\Http\Controllers;

//use Request;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function pdf($id, Pasien $pasien)
    // {
    //     // $pasien = Pasien::all();
    //     $pasien = new Pasien;
    //     $data = $pasien->findData($id);

    //     // QR Code
    //     $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate(\Request::url()));

    //     $pdf = \PDF::loadView('data.pdf', ["pasien"=>$data, "title"=>"Data Pasien", "qrcode"=>$qrcode]);
    //     return $pdf->stream('data-pasien.pdf');
    // }

    public function index()
    {
        return view('data.pasien',[
            "title" => "Pasien",
            "judultabel" => "Data Pasien"
        ]);
    }

    public function getPasien(Request $request, Pasien $pasien)
    {
        $data = $pasien->latest();
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '
                    <a href="/pasien/'.$data->id.'" class ="btn btn-primary btn-md text-decoration-none text-white fa fa-eye" > Detail</a>
                    <button type="button" class="btn btn-success btn-md fa fa-pencil" id="getEditPasienData" data-id="'.$data->id.'"> Ubah</button>
                    <button type="button" class="btn btn-danger btn-md fa fa-times" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeletePasienModal" id="getDeleteId"> Hapus</button>';
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
            'no_lab'        => 'required',
            'no_rm'         => 'required',
            'nama'          => 'required',
            'nama_dok'      => 'required',
            'jns_kelamin'   => 'required',
            'umur'          => 'required',
            'tgl_lahir'     => 'required',
            'alamat'        => 'required',
            'no_hp'         => 'required',
            'lokasi'        => 'required',
            'tgl_tes'       => 'required',
            'hasil'         => 'required',
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

    public function show(Pasien $pasien)
    {
       
        return view("data.detailpasien",[
            "title" => "Pasien",
            "judultabel" => "Data Pasien",
            "pasien" => $pasien,
        ]);
    }

    public function edit($id)
    {
        $pasien = new Pasien;
        $data = $pasien->findData($id);
        $l = "Laki-Laki";
        $p = "Perempuan";
        
        $sjns_kelamin = $data->jns_kelamin;
        if ($sjns_kelamin == $l) {
            $jns_satu = $l;
            $jns_dua = $p;
        } else {
            $jns_satu = $p;
            $jns_dua = $l;
        }

        $shasil = $data->hasil;
        if ($shasil == "Positif") {
            $hasil_satu = "Positif";
            $hasil_dua = "Negatif";
        } else {
            $hasil_satu = "Negatif";
            $hasil_dua = "Positif";
        }

        $sigm = $data->igm;
        if ($sigm == "Positif") {
            $igm_satu = "Positif";
            $igm_dua = "Negatif";
        } else {
            $igm_satu = "Negatif";
            $igm_dua = "Positif";
        }

        $sigg = $data->igg;
        if ($sigg == "Positif") {
            $igg_satu = "Positif";
            $igg_dua = "Negatif";
        } else {
            $igg_satu = "Negatif";
            $igg_dua = "Positif";
        }

        $smetode = $data->metode;
        if ($smetode == "Swab") {
            $metode_satu = "Swab";
            $metode_dua = "Rapid";
        } elseif ($smetode == "Rapid") {
            $metode_satu = "Rapid";
            $metode_dua = "Swab";
        }
        
        $html = '<div class="form-group">
                    <label>No Laboratory :</label>
                    <input type="text" class="form-control" name="no_lab" id="editNo_lab" value="'.$data->no_lab.'">
                </div>
                <div class="form-group">
                    <label>No Rekam Medis :</label>
                    <input type="text" class="form-control" name="no_rm" id="editNo_rm" value="'.$data->no_rm.'">
                </div>
                <div class="form-group">
                    <label>Nama :</label>
                    <input type="text" class="form-control" name="nama" id="editNama" value="'.$data->nama.'">
                </div>
                <div class="form-group">
                    <label>Nama Dokter :</label>
                    <input type="text" class="form-control" name="nama_dok" id="editNama_dok" value="'.$data->nama_dok.'">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin :</label>
                    <select class="form-control mb-1" name="jns_kelamin" id="editJns_kelamin">
                        <option value="'.$jns_satu.'" >'.$jns_satu.'</option>
                        <option value="'.$jns_dua.'" >'.$jns_dua.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Umur :</label>
                    <input type="text" class="form-control" name="umur" id="editUmur" value="'.$data->umur.'">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir :</label>
                    <input type="text" class="form-control" name="tgl_lahir" id="editTgl_lahir" data-provide="datepicker" value="'.$data->tgl_lahir.'">
                </div>
                <div class="form-group">
                    <label>Alamat :</label>
                    <textarea class="form-control" name="alamat" id="editAlamat">'.$data->alamat.'</textarea>
                </div>
                <div class="form-group">
                    <label>No HP :</label>
                    <input type="text" class="form-control" name="no_hp" id="editNo_hp" value="'.$data->no_hp.'">
                </div>
                <div class="form-group">
                    <label>Lokasi :</label>
                    <input type="text" class="form-control" name="lokasi" id="editLokasi" value="'.$data->lokasi.'">
                </div>
                <div class="form-group">
                    <label>Tanggal Tes :</label>
                    <input type="text" class="form-control" name="tgl_tes" id="editTgl_tes" data-provide="datepicker" value="'.$data->tgl_tes.'">
                </div>
                <div class="form-group">
                    <label>Hasil :</label>
                    <select class="form-control mb-1" name="hasil" id="editHasil">
                        <option value="'.$hasil_satu.'" >'.$hasil_satu.'</option>
                        <option value="'.$hasil_dua.'" >'.$hasil_dua.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IgM :</label>
                    <select class="form-control mb-1" name="igm" id="editIgm">
                        <option value="'.$igm_satu.'" >'.$igm_satu.'</option>
                        <option value="'.$igm_dua.'" >'.$igm_dua.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>IgG :</label>
                    <select class="form-control mb-1" name="igg" id="editIgg">
                        <option value="'.$igg_satu.'" >'.$igg_satu.'</option>
                        <option value="'.$igg_dua.'" >'.$igg_dua.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Metode :</label>
                    <select class="form-control mb-1" name="metode" id="editMetode">
                        <option value="'.$metode_satu.'" >'.$metode_satu.'</option>
                        <option value="'.$metode_dua.'" >'.$metode_dua.'</option>
                    </select>
                </div>';

        return response()->json(['html'=>$html]);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'no_lab'        => 'required',
            'no_rm'         => 'required',
            'nama'          => 'required',
            'nama_dok'      => 'required',
            'jns_kelamin'   => 'required',
            'umur'          => 'required',
            'tgl_lahir'     => 'required',
            'alamat'        => 'required',
            'no_hp'         => 'required',
            'lokasi'        => 'required',
            'tgl_tes'       => 'required',
            'hasil'         => 'required',
            'igm'           => 'required',
            'igg'           => 'required',
            'metode'        => 'required',
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

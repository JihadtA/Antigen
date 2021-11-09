<?php

namespace App\Http\Controllers;

//use Request;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PasienController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
            'bahan'         => 'required',
            'hasil'         => 'required',
            'nilai_rujukan' => 'required',
            'satuan'        => 'required',
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
                    <select class="form-control mb-1" name="jns_kelamin" id="editJns_kelamin" value="'.$data->jns_kelamin.'">
                        <option value="'.$l.'" @if(isset('.$pasien.')) @if('.$pasien->jns_kelamin.' == '.$l.') selected @endif @endif>'.$l.'</option>
                        <option value="'.$p.'" @if(isset('.$pasien.')) @if('.$pasien->jns_kelamin.' == '.$p.') selected @endif @endif>'.$p.'</option>    
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
                    <label>Bahan :</label>
                    <input type="text" class="form-control" name="bahan" id="editBahan" value="'.$data->bahan.'">
                </div>
                <div class="form-group">
                    <label>Hasil :</label>
                    <select class="form-control mb-1" name="hasil" id="editHasil" value="'.$data->hasil.'">
                        <option value="Positif" @if(isset('.$pasien.')) @if('.$pasien->hasil.' == "Positif") selected @endif @endif>Positif</option>
                        <option value="Negatif" @if(isset('.$pasien.')) @if('.$pasien->hasil.' == "Negatif") selected @endif @endif>Negatif</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Nilai Rujukan :</label>
                    <select class="form-control mb-1" name="nilai_rujukan" id="editNilai_rujukan" value="'.$data->nilai_rujukan.'">
                        <option value="Positif" @if(isset('.$pasien.')) @if('.$pasien->nilai_rujukan.' == "Positif") selected @endif @endif>Positif</option>
                        <option value="Negatif" @if(isset('.$pasien.')) @if('.$pasien->nilai_rujukan.' == "Negatif") selected @endif @endif>Negatif</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Satuan :</label>
                    <select class="form-control mb-1" name="satuan" id="editSatuan" value="'.$data->satuan.'">
                        <option value="Positif" @if(isset('.$pasien.')) @if('.$pasien->satuan.' == "Positif") selected @endif @endif>Positif</option>
                        <option value="Negatif" @if(isset('.$pasien.')) @if('.$pasien->satuan.' == "Negatif") selected @endif @endif>Negatif</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Metode :</label>
                    <select class="form-control mb-1" name="metode" id="editMetode" value="'.$data->metode.'">
                        <option value="Swab" @if(isset('.$pasien.')) @if('.$pasien->metode.' == "Swab") selected @endif @endif>Swab</option>
                        <option value="Rapid" @if(isset('.$pasien.')) @if('.$pasien->metode.' == "Rapid") selected @endif @endif>Rapid</option>
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
            'bahan'         => 'required',
            'hasil'         => 'required',
            'nilai_rujukan' => 'required',
            'satuan'        => 'required',
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

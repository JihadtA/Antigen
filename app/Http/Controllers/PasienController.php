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
        $rcheck = "checked";
        
        // Select Jns_Kelamin
        $sjns_kelamin = $data->jns_kelamin;
        if ($sjns_kelamin == $l) {
            $jns_satu = $l;
            $jns_dua = $p;
        } else {
            $jns_satu = $p;
            $jns_dua = $l;
        }

        // Select Igm
        $sigm = $data->igm;
        if ($sigm == "Positif") {
            $igm_satu = "Positif";
            $igm_dua = "Negatif";
        } else {
            $igm_satu = "Negatif";
            $igm_dua = "Positif";
        }

        // Select Igg
        $sigg = $data->igg;
        if ($sigg == "Positif") {
            $igg_satu = "Positif";
            $igg_dua = "Negatif";
        } else {
            $igg_satu = "Negatif";
            $igg_dua = "Positif";
        }

        // Select Metode
        $smetode = $data->metode;
        if ($smetode == "Swab") {
            $metode_satu = "Swab";
            $metode_dua = "Rapid";
        } elseif ($smetode == "Rapid") {
            $metode_satu = "Rapid";
            $metode_dua = "Swab";
        }

        // Radio Gejala Satu
        $rk_satu = $data->k_satu;
        if ($rk_satu == "1") {
            $k_satu_a = "Ya";
            $k_satu_b = "Tidak";
            $k_satu_c = "1";
            $k_satu_d = "0";
        } elseif ($rk_satu == "0") {
            $k_satu_a = "Tidak";
            $k_satu_b = "Ya";
            $k_satu_c = "0";
            $k_satu_d = "1";
        }

        // Radio Gejala Dua
        $rk_dua = $data->k_dua;
        if ($rk_dua == "1") {
            $k_dua_a = "Ya";
            $k_dua_b = "Tidak";
            $k_dua_c = "1";
            $k_dua_d = "0";
        } elseif ($rk_dua == "0") {
            $k_dua_a = "Tidak";
            $k_dua_b = "Ya";
            $k_dua_c = "0";
            $k_dua_d = "1";
        }

        // Radio Gejala Tiga
        $rk_tiga = $data->k_tiga;
        if ($rk_tiga == "1") {
            $k_tiga_a = "Ya";
            $k_tiga_b = "Tidak";
            $k_tiga_c = "1";
            $k_tiga_d = "0";
        } elseif ($rk_tiga == "0") {
            $k_tiga_a = "Tidak";
            $k_tiga_b = "Ya";
            $k_tiga_c = "0";
            $k_tiga_d = "1";
        }

        // Radio Gejala Empat
        $rk_empat = $data->k_empat;
        if ($rk_empat == "1") {
            $k_empat_a = "Ya";
            $k_empat_b = "Tidak";
            $k_empat_c = "1";
            $k_empat_d = "0";
        } elseif ($rk_empat == "0") {
            $k_empat_a = "Tidak";
            $k_empat_b = "Ya";
            $k_empat_c = "0";
            $k_empat_d = "1";
        }

        // Radio Screening
        $rscreening = $data->screening;
        if ($rscreening == "1") {
            $screening_a = "Ya";
            $screening_b = "Tidak";
            $screening_c = "1";
            $screening_d = "0";
        } elseif ($rscreening == "0") {
            $screening_a = "Tidak";
            $screening_b = "Ya";
            $screening_c = "0";
            $screening_d = "1";
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
                <label>Metode :</label>
                <select class="form-control mb-1" name="metode" id="editMetode">
                    <option value="'.$metode_satu.'" >'.$metode_satu.'</option>
                    <option value="'.$metode_dua.'" >'.$metode_dua.'</option>
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
                                
        <div class="form-check">
            <label>Apakah anda memiliki keluhan Demam ?</label> <br>
            <input type="radio" id="k_satu1" name="editK_satu" value="'.$k_satu_c.'" '.$rcheck.'> '.$k_satu_a.'</label>
            <input type="radio" id="k_satu2" name="editK_satu" value="'.$k_satu_d.'" > '.$k_satu_b.'</label><br>
        </div>

        <div class="form-check">
            <br>
            <label>Apakah anda memiliki keluhan Nyeri telan ?</label> <br>
            <input type="radio"  id="k_dua1" name="editK_dua" value="'.$k_dua_c.'" '.$rcheck.'> '.$k_dua_a.'</label>
            <input type="radio" id="k_dua2" name="editK_dua" value="'.$k_dua_d.'" > '.$k_dua_b.'</label><br>
        </div>

        <div class="form-check">
            <br>
            <label>Apakah anda memiliki keluhan Batuk ?</label> <br>
            <input type="radio"  id="k_tiga1" name="editK_tiga" value="'.$k_tiga_c.'" '.$rcheck.'> '.$k_tiga_a.'</label>
            <input type="radio" id="k_tiga2" name="editK_tiga" value="'.$k_tiga_d.'" > '.$k_tiga_b.'</label><br>
        </div>

        <div class="form-check">
            <br>
            <label>Apakah anda memiliki keluhan Nafas pendek / Sesak nafas / Nafas terasa berat ?</label> <br>
            <input type="radio"  id="k_empat1" name="editK_empat" value="'.$k_empat_c.'" '.$rcheck.'> '.$k_empat_a.'</label>
            <input type="radio" id="k_empat2" name="editK_empat" value="'.$k_empat_d.'" > '.$k_empat_b.'</label><br>
        </div>

        <div class="form-check">
        <br>
        <label>Apakah anda Pernah :</label> <br>
        <li>Datang ke wilayah zona merah dan melakukan aktivitas disana</li>
        <li>Pernah berinteraksi dengan terduga pasien Covid-19</li>
        <li>Pernah mengalami gajala yang berhubungan dengan Covid-19</li>
        <li>Pernah mengikuti acara yang dihadiri banyak orang pada saat pandemi corona</li><br>
            <input type="radio"  id="screening" name="editScreening" value="'.$screening_c.'" '.$rcheck.'> '.$screening_a.'</label>
            <input type="radio" id="screening" name="editScreening" value="'.$screening_d.'" > '.$screening_b.'</label><br>
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

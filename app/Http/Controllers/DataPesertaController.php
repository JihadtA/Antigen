<?php

namespace App\Http\Controllers;

use App\Models\DataPeserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPesertaController extends Controller
{
    public function __construct()
    {
        $this->DataPeserta = new DataPeserta();
    }

    public function index()
    {
        $data = [
            'datapes' => $this -> DataPeserta -> allData(),
            'title' => "Data Peserta",
            'judultabel' => "Data Peserta"
        ];

        return view("datapeserta.datapeserta",$data);
    }

    public function detail($id)
    {
        if (!$this->DataPeserta->detailData($id)) {
            abort(404);
        }

        $data = [
            'datapes' => $this -> DataPeserta -> detailData($id),
            'title' => "Data Peserta",
            'judultabel' => "Data Peserta"
        ];

        return view("datapeserta.detail_peserta",$data);
    }

    public function add()
    {
        return view("datapeserta.add_peserta",[
            'title' => "Tambah Data Peserta",
            'judultabel' => "Tambah Data Peserta"
        ]);
    }

    public function insert(){
        request()->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_cek' => 'required',
        ] , [
            'nik.required' => 'wajib diisi !!',
            'nama.required' => 'wajib diisi !!',
            'jns_kelamin.required' => 'wajib diisi !!',
            'tmpt_lahir.required' => 'wajib diisi !!',
            'tgl_lahir.required' => 'wajib diisi !!',
            'alamat.required' => 'wajib diisi !!',
            'no_hp' => 'wajib diisi !!',
            'jns_cek.required' => 'wajib diisi !!',
        ]);

        $data = [
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'jns_kelamin' => Request()->jns_kelamin,
            'tmpt_lahir' => Request()->tmpt_lahir,
            'tgl_lahir' => Request()->tgl_lahir,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'jns_cek' => Request()->jns_cek,
        ];
      
        $this->DataPeserta->addData($data);
        return redirect()->route('datapeserta.index')->with('pesan'.'Data Berhasil diTambahkan!!!');

    }

    public function edit($id)
    {
        if (!$this->DataPeserta->detailData($id)) {
            abort(404);
        }

        $data = [
            'datapes' => $this -> DataPeserta -> detailData($id),
            'title' => "Data Peserta",
            'judultabel' => "Data Peserta"
        ];

        return view('datapeserta.edit_peserta', $data);
    }


    public function update($id){
        request()->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jns_cek' => 'required',
        ] , [
            'nik.required' => 'wajib diisi !!',
            'nama.required' => 'wajib diisi !!',
            'jns_kelamin.required' => 'wajib diisi !!',
            'tmpt_lahir.required' => 'wajib diisi !!',
            'tgl_lahir.required' => 'wajib diisi !!',
            'alamat.required' => 'wajib diisi !!',
            'no_hp' => 'wajib diisi !!',
            'jns_cek.required' => 'wajib diisi !!',
        ]);


        $data = [
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'jns_kelamin' => Request()->jns_kelamin,
            'tmpt_lahir' => Request()->tmpt_lahir,
            'tgl_lahir' => Request()->tgl_lahir,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'jns_cek' => Request()->jns_cek,
        ];
        
        $this->DataPeserta->editData($id, $data);
        return redirect()->route('datapeserta.index')->with('pesan'.'Data Berhasil diUbah!!!');

    }

    public function delete($id)
    {

        $this->DataPeserta->deleteData($id,);
        return redirect()->route('datapeserta.index')->with('pesan'.'Data Berhasil diHapus!!!');
    }

}

@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('content')
<form action="/datapeserta/update/{{ $datapes->id }}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="conten">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIK</label>
                <input name="nik" class="form-control" value="{{ $datapes->nik }}">
                <div class="text">
                    @error('nik')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input name="nama" class="form-control" value="{{ $datapes->nama }}">
                <div class="text">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control mb-1" name="jns_kelamin" id="editJns_kelamin" value="{{ $datapes->jns_kelamin }}">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>    
                </select>
                <div class="text">
                    @error('jns_kelamin')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input name="tmpt_lahir" class="form-control" value="{{ $datapes->tmpt_lahir }}">
                <div class="text">
                    @error('tmpt_lahir')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input name="tgl_lahir" class="form-control" value="{{ $datapes->tgl_lahir }}">
                <div class="text">
                    @error('tgl_lahir')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" class="form-control" value="{{ $datapes->alamat }}">
                <div class="text">
                    @error('alamat')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Jenis Cek</label>
                <select class="form-control mb-1" name="jns_cek" id="editJns_cek" value="{{ $datapes->jns_cek }}">
                    <option value="Rapid">Rapid</option>
                    <option value="Swap">Swap</option>    
                </select>
                <div class="text">
                    @error('jns_cek')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Hasil</label>
                <select class="form-control mb-1" name="hasil" id="edithasil" value="{{ $datapes->hasil }}">
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</option>    
                </select>
                <div class="text">
                    @error('hasil')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary ">Simpan</button>
                <a href="/datapeserta" class="btn btn-success">Kembali</a>
            </div>

        </div>
    </div>
</div>

</form>
@endsection
@extends('layouts.master')
@section('breadcrumb')
    <h3>{{ $title }}</h3>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
@endsection
@section('content')
<form action="/datapeserta/insert" method="POST" enctype="multipart/form-data">
    @csrf

<div class="conten">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIK</label>
                <input name="nik" class="form-control" value="{{ old('nik') }}">
                <div class="text">
                    @error('nik')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input name="nama" class="form-control" value="{{ old('nama') }}">
                <div class="text">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control mb-1" name="jns_kelamin" id="editJns_kelamin" value="{{ old('jns_kelamin') }}">
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
                <input name="tmpt_lahir" class="form-control" value="{{ old('tmpt_lahir') }}">
                <div class="text">
                    @error('tmpt_lahir')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" id="datepicker">
                <div class="text">
                    @error('tgl_lahir')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                <div class="text">
                    @error('alamat')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Jenis Cek</label>
                <select class="form-control mb-1" name="jns_cek" id="editJns_cek" value="{{ old('jns_cek') }}">
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
                <select class="form-control mb-1" name="hasil" id="edithasil" value="{{ old('hasil') }}">
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</option>    
                </select>
                <div class="text">
                    @error('hasil')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-5">
            </div>

            <div class="form-group">
                <button class="btn btn-primary ">Simpan</button>
                <a href="/datapeserta" class="btn btn-success">Kembali</a>
                <div class="mb-5">
            </div>

        </div>
    </div>
</div>

</form>

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
@endsection

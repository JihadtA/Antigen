@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('content')
<table class="table">
    <tr>
        <th width="100px">NIK</th>
        <th width="30px">:</th>
        <th>{{ $datapes->nik }}</th>
    </tr>
    
    <tr>
        <th width="100px">Nama</th>
        <th width="30px">:</th>
        <th>{{ $datapes->nama }}</th>
    </tr>
    
    <tr>
        <th width="100px">Jenis Kelamin</th>
        <th width="30px">:</th>
        <th>{{ $datapes->jns_kelamin }}</th>
    </tr>
    
    <tr>
        <th width="100px">Tempat Lahir</th>
        <th width="30px">:</th>
        <th>{{ $datapes->tmpt_lahir }}</th>
    </tr>    
    
    <tr>
        <th width="100px">Tanggal Lahir</th>
        <th width="30px">:</th>
        <th>{{ $datapes->tgl_lahir }}</th>
    </tr>    
    
    <tr>
        <th width="100px">Alamat</th>
        <th width="30px">:</th>
        <th>{{ $datapes->alamat }}</th>
    </tr>    
   
    <tr>
        <th width="100px">Jenis Cek</th>
        <th width="30px">:</th>
        <th>{{ $datapes->jns_cek }}</th>
    </tr>
   
    <tr>
        <th width="100px">Hasil</th>
        <th width="30px">:</th>
        <th>{{ $datapes->hasil }}</th>
    </tr>

    <tr>
        <th><a href="/datapeserta" class="btn btn-sm btn-success">Kembali</a></th>
    </tr>    
</table>
@endsection
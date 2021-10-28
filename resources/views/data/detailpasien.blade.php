@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $judultabel }}</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            Data
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('pasien.index') }}">Pasien</a>
        </li>
        <li class="breadcrumb-item active">
            <strong>Detail</strong>
        </li>
    </ol>
@endsection
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    @if(session('message'))
                        <div class="alert alert-{{session('message')['status']}}">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('message')['desc'] }}
                        </div>
                    @endif
                    <h5>Detail Pasien</h5>  
                </div>
                <div class="ibox-content">
                    {{-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <span>{{isset($mobil)? $mobil->name : ''}}</span>
                        </div>
                    </div> --}}
                    <div class="row">
                    <table class="table table-striped" id="example">
                        <tbody>
                            <tr>
                                <td>Nik</td>
                                <th>{{ isset($pasien)? $pasien->nik : '' }}</th>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <th>{{ isset($pasien)? $pasien->nama : '' }}</th>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <th>{{ isset($pasien)? $pasien->jns_kelamin : '' }}</th>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <th>{{ isset($pasien)? $pasien->tmpt_lahir : '' }}</th>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <th>{{ isset($pasien)? $pasien->tgl_lahir : '' }}</th>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <th>{{ isset($pasien)? $pasien->alamat : '' }}</th>
                            </tr>
                            <tr>
                                <td>Jenis Cek</td>
                                <th>{{ isset($pasien)? $pasien->jns_cek : '' }}</th>
                            </tr>
                            <tr>
                                <td>Hasil</td>
                                <th>{{ isset($pasien)? $pasien->hasil : '' }}</th>
                            </tr>
                        </tbody>
                    </table>
                        <div class="modal-footer position-relative row mt-3" >
                            <div class="col-sm-12 col-sm-offset-2">
                            <a href="{{ route('pasien.index') }}" class="btn btn-success btn-hemisperich text-white">Kembali</a>
                            <a href="/pasien/printpdf" target="_blank" class="btn btn-danger">Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
@push('scripts')
    <script>
        
    </script>
@endpush
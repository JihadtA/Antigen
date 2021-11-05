@extends('layouts.master')
@section('breadcrumb')
    <style type="text/css">
    .ml-1{
            margin-top: 20px;
        }
    .mid{
            width : 75%;
        }
    </style>

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
                    <div class="ml-1 mid row">
                    <table class="table table-bordered">
                        <tbody>
                        
                            <tr>
                                <td>No Lab</td>
                                <th>{{ isset($pasien)? $pasien->no_lab : '' }}</th>
                            </tr>
                            <tr>
                                <td>No Rekam Medis</td>
                                <th>{{ isset($pasien)? $pasien->no_rm : '' }}</th>
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
                                <td>Umur</td>
                                <th>{{ isset($pasien)? $pasien->umur : '' }}</th>
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
                                <td>No Hp</td>
                                <th>{{ isset($pasien)? $pasien->no_hp : '' }}</th>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <th>{{ isset($pasien)? $pasien->lokasi : '' }}</th>
                            </tr>
                            <tr>
                                <td>Tanggal Tes</td>
                                <th>{{ isset($pasien)? $pasien->tgl_tes : '' }}</th>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <th>{{ isset($pasien)? $pasien->bahan : '' }}</th>
                            </tr>
                            <tr>
                                <td>Hasil</td>
                                <th>{{ isset($pasien)? $pasien->hasil : '' }}</th>
                            </tr>
                            <tr>
                                <td>Nilai Rujukan</td>
                                <th>{{ isset($pasien)? $pasien->nilai_rujukan : '' }}</th>
                            </tr>
                            <tr>
                                <td>Satuan</td>
                                <th>{{ isset($pasien)? $pasien->satuan : '' }}</th>
                            </tr>
                            <tr>
                                <td>Metode</td>
                                <th>{{ isset($pasien)? $pasien->metode : '' }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-md-6">
                        {{-- {!! QrCode::size(100)->generate(Request::url()); !!} --}}
                    </div> 
                    
                    
                        <div class="modal-footer position-relative mt-3 " >
                            <div class="col-sm-12 col-sm-offset-2 ">
                                <a href="{{ route('pasien.index') }}" class="btn btn-success btn-hemisperich text-white">Kembali</a>
                                <a href="/pasien/{{ $pasien->id }}/cetak" target="_blank" class="btn btn-primary">Print</a>
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
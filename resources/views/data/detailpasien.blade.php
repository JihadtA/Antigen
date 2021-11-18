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
                    <table class="table table-hover" style="border: none;">
                        <tbody>
                            <tr>
                                <td>No Lab</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->no_lab : '' }}</th>
                            </tr>
                            <tr>
                                <td>No Rekam Medis</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->no_rm : '' }}</th>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->nama : '' }}</th>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->jns_kelamin : '' }}</th>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->umur : '' }}</th>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->tgl_lahir : '' }}</th>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->alamat : '' }}</th>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->no_hp : '' }}</th>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->lokasi : '' }}</th>
                            </tr>
                            <tr>
                                <td>Tanggal Tes</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->tgl_tes : '' }}</th>
                            </tr>
                            <tr>
                                <td>Metode</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->metode : '' }}</th>
                            </tr>
                            <tr>
                                <td>IgM</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->igm : '' }}</th>
                            </tr>
                            <tr>
                                <td>IgG</td>
                                <th>:</th>
                                <th>{{ isset($pasien)? $pasien->igg : '' }}</th>
                            </tr>

                            @if ($pasien->k_satu == "1")
                            <tr>
                                <td>Keluhan yang diderita </td>
                                <th>:</th>
                                <th>
                                @if ($pasien->k_dua == "1" && $pasien->k_tiga == "1" && $pasien->k_empat == "1")
                                    <li>Demam</li>
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_dua == "0" && $pasien->k_tiga == "1" && $pasien->k_empat == "1")
                                    <li>Demam</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_dua == "1" && $pasien->k_tiga == "0" && $pasien->k_empat == "1")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_dua == "1" && $pasien->k_tiga == "1" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                @elseif($pasien->k_dua == "1" && $pasien->k_tiga == "0" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                @elseif($pasien->k_dua == "0" && $pasien->k_tiga == "1" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Batuk</li>
                                @elseif($pasien->k_dua == "0" && $pasien->k_tiga == "0" && $pasien->k_empat == "1")
                                    <li>Demam</li>    
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @endif
                                </th>
                            </tr>
                            @elseif ($pasien->k_dua == "1")
                            <tr>
                                <td>Keluhan yang diderita </td>
                                <th>:</th>
                                <th>
                                @if ($pasien->k_satu == "1" && $pasien->k_tiga == "1" && $pasien->k_empat == "1")
                                    <li>Demam</li>
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_tiga == "1" && $pasien->k_empat == "1")
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_tiga == "0" && $pasien->k_empat == "1")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_tiga == "1" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_tiga == "0" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_tiga == "1" && $pasien->k_empat == "0")
                                    <li>Nyeri Telan</li>    
                                    <li>Batuk</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_tiga == "0" && $pasien->k_empat == "1")
                                    <li>Nyeri Telan</li>    
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @endif
                                </th>
                            </tr>
                            @elseif ($pasien->k_tiga == "1")
                            <tr>
                                <td>Keluhan yang diderita </td>
                                <th>:</th>
                                <th>
                                @if ($pasien->k_satu == "1" && $pasien->k_dua == "1" && $pasien->k_empat == "1")
                                    <li>Demam</li>
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "1" && $pasien->k_empat == "1")
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "0" && $pasien->k_empat == "1")
                                    <li>Demam</li>    
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "1" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "0" && $pasien->k_empat == "0")
                                    <li>Demam</li>    
                                    <li>Batuk</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "1" && $pasien->k_empat == "0")
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "0" && $pasien->k_empat == "1")
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @endif
                                </th>
                            </tr>
                            @elseif ($pasien->k_empat == "1")
                            <tr>
                                <td>Keluhan yang diderita </td>
                                <th>:</th>
                                <th>
                                @if ($pasien->k_satu == "1" && $pasien->k_dua == "1" && $pasien->k_tiga == "1")
                                    <li>Demam</li>
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "1" && $pasien->k_tiga == "1")
                                    <li>Nyeri Telan</li>
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "0" && $pasien->k_tiga == "1")
                                    <li>Demam</li>    
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "1" && $pasien->k_tiga == "0")
                                    <li>Demam</li>    
                                    <li>Nyeri Telan</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "1" && $pasien->k_dua == "0" && $pasien->k_tiga == "0")
                                    <li>Demam</li>   
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "1" && $pasien->k_tiga == "0")
                                    <li>Nyeri Telan</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @elseif($pasien->k_satu == "0" && $pasien->k_dua == "0" && $pasien->k_tiga == "1")
                                    <li>Batuk</li>
                                    <li>Nafas pendek / Sesak nafas / Nafas terasa berat</li>
                                @endif
                                </th>
                            </tr>
                            @endif
                            
                            <tr>
                                <td>Screening</td>
                                <th class="align-middle">:</th>
                                @if ($pasien->screening == "1")
                                    <th class="align-middle"> Ya</th>
                                @elseif ($pasien->screening == "0")
                                    <th class="align-middle"> Tidak</th>
                                @endif
                            </tr>

                            {{-- <tr>
                                <td>Apakah anda memiliki keluhan Demam?</td>
                                <th>:</th>
                                @if ($pasien->k_satu == "1")
                                    <th> Ya</th>
                                @elseif ($pasien->k_satu == "0")
                                    <th> Tidak</th>
                                @endif
                            </tr>
                            <tr>
                                <td>Apakah anda memiliki keluhan Nyeri telan?</td>
                                <th>:</th>
                                @if ($pasien->k_dua == "1")
                                    <th> Ya</th>
                                @elseif ($pasien->k_dua == "0")
                                    <th> Tidak</th>
                                @endif
                            </tr>
                            <tr>
                                <td>Apakah anda memiliki keluhan Batuk?</td>
                                <th>:</th>
                                @if ($pasien->k_tiga == "1")
                                    <th> Ya</th>
                                @elseif ($pasien->k_tiga == "0")
                                    <th> Tidak</th>
                                @endif
                            </tr>
                            <tr>
                                <td>Apakah anda memiliki keluhan Nafas pendek / Sesak nafas / Nafas terasa berat?</td>
                                <th>:</th>
                                @if ($pasien->k_empat == "1")
                                    <th> Ya</th>
                                @elseif ($pasien->k_empat == "0")
                                    <th> Tidak</th>
                                @endif
                            </tr>
                            <tr>
                                <td>
                                    Apakah anda Pernah :
                                    <li>Datang ke wilayah zona merah dan melakukan aktivitas disana</li>
                                    <li>Pernah berinteraksi dengan terduga pasien Covid-19</li>
                                    <li>Pernah mengalami gajala yang berhubungan dengan Covid-19</li>
                                    <li>Pernah mengikuti acara yang dihadiri banyak orang pada saat pandemi corona</li>
                                </td>
                                <th class="align-middle">:</th>
                                @if ($pasien->screening == "1")
                                    <th class="align-middle"> Ya</th>
                                @elseif ($pasien->screening == "0")
                                    <th class="align-middle"> Tidak</th>
                                @endif
                            </tr> --}}
                            <tr>
                                <td>Hasil</td>
                                <th>:</th>
                                @if ($pasien->igm == "Positif" && $pasien->igg == "Positif")
                                    <th> Positif</th>
                                @elseif ($pasien->igm == "Positif" && $pasien->igg == "Negatif")
                                    <th> Positif</th>
                                @elseif ($pasien->igm == "Negatif" && $pasien->igg == "Positif")
                                    <th> Negatif</th>
                                @elseif ($pasien->igm == "Negatif" && $pasien->igg == "Negatif")
                                    <th> Positif</th>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                        <div class="col-md-6">
                            
                        </div> <br>
                        <div class="text-center">
                            <a href="{{ route('pasien.index') }}" class="btn btn-success btn-hemisperich text-white">Kembali</a>
                            <a href="/pasien/{{ $pasien->id }}/cetak" target="_blank" class="btn btn-primary">Print</a>
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
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

    <h2>{{ $title }}</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            Data
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('datapeserta.index') }}">Peserta</a>
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
                    <h5>Detail Peserta</h5>  
                </div>
                <div class="ibox-content">
                    <div class="ml-1 mid row">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td width="100px">NIK</td>
                                <th>{{ $datapes->nik }}</th>
                            </tr>
                            
                            <tr>
                                <td width="100px">Nama</td>
                                <th>{{ $datapes->nama }}</th>
                            </tr>
                            
                            <tr>
                                <td width="100px">Jenis Kelamin</td>
                                <th>{{ $datapes->jns_kelamin }}</th>
                            </tr>
                            
                            <tr>
                                <td width="100px">Tempat Lahir</td>
                                <th>{{ $datapes->tmpt_lahir }}</th>
                            </tr>    
                            
                            <tr>
                                <td width="100px">Tanggal Lahir</td>
                                <th>{{ $datapes->tgl_lahir }}</th>
                            </tr>    
                            
                            <tr>
                                <td width="100px">Alamat</td>
                                <th>{{ $datapes->alamat }}</th>
                            </tr>    
                            
                            <tr>
                                <td>No Hp</td>
                                <th>{{ $datapes->no_hp }}</th>
                            </tr>

                            <tr>
                                <td width="100px">Jenis Tes</td>
                                <th>{{ $datapes->jns_cek }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer position-relative mt-3 " >
                        <div class="col-sm-12 col-sm-offset-2 ">
                            <tr>
                                <th><a href="/datapeserta" class="btn btn-sm btn-success">Kembali</a></th>
                            </tr> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
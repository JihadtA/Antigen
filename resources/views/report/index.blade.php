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

    <h2>Report</h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            Report
        </li>
        <!-- <li class="breadcrumb-item active">
            <strong>Pasien</strong>
        </li> -->
    </ol>
@endsection
@section('content')


@endsection
@push('scripts')
    <script>
        
    </script>
@endpush
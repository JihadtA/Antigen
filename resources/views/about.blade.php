@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection

@push('stylesheets')
<link href="{{ asset('profile/profile.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="about-section">
    <h1 style="margin-bottom: 15px">Tentang</h1>
    <p>SWAB ANTIGEN | PCR ANTIGEN | RAPID ANTIGEN</p>
</div>
  
  <h2 style="text-align:center; margin-bottom: 15px;">Layanan Kami</h2>
  <div class="row">
    <div class="column">
      <div class="card" style="margin-bottom: 25px">
        <img src="/img/swab.jpg" alt="Swab" style="width:100%">
        <div class="container">
          <h2>Swab Test Antigen</h2>
          <p class="title">Keakuratan 80% - 90%</p>
          <p>Sampel dari saluran pernapasan (melalui hidung)</p>
          <p>Sederhana dan lebih cepat</p>
          <p>Satuan Hasil : Positif atau Negatif</p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card" style="margin-bottom: 65px">
        <img src="/img/PCR.jpg" alt="PCR" style="width:100%">
        <div class="container">
          <h2>PCR Test Antigen</h2>
          <p class="title">Keakuratan 98%</p>
          <p>Sampel dari rongga nasofaring dan atau orofarings (melalui hidung dan tenggorokan)</p>
          <p>Lebih rumit dan memakan waktu</p>
          <p>Satuan Hasil : Positif atau Negatif</p>
        </div>
      </div>
    </div>

    <div class="column">
        <div class="card" style="margin-bottom: 25px">
          <img src="/img/rapid.jpg" alt="Rapid" style="width:100%">
          <div class="container">
            <h2>Rapid Test Antigen</h2>
            <p class="title">Keakuratan 18%</p>
            <p>Sampel darah dengan tusuk jari atau darah dari vena</p>
            <p>Sederhana dan lebih cepat</p>
            <p>Satuan Hasil : Reaktif atau Non Reaktif</p>
          </div>
        </div>
      </div>
    </div>


@endsection
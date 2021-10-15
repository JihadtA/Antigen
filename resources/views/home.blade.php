@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('content')
<p>Halaman Home</p>
<div id="kopi-covid"></div>
<script>
  var f = document.createElement("iframe")
  f.src = "https://kopi.dev/widget-covid-19/"
  f.width = "100%"
  f.height = 380
  f.scrolling = "no"
  f.frameBorder = 0
  var rootEl = document.getElementById("kopi-covid")
  console.log(rootEl)
  rootEl.appendChild(f)
</script>
@endsection
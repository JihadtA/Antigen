@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('content')
<p><img src="img/{{ $image }}" alt="{{ $name }}" width="700" height="330"></p>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>


@endsection
@extends('layouts.master')
@section('breadcrumb')
    <h2>{{ $title }}</h2>
@endsection
@section('content')
<p><img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"></p>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>


@endsection
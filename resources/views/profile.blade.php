@extends('layouts.master')
@section('breadcrumb')

@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{ $title }}</h2>
    </div>
</div>
<p><img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"></p>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>


@endsection
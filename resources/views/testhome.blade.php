

@extends('layouts.admin')
@section('content')
    @foreach ($oportunidads as $oportunida)
        <h5 class="card-text">Oportunidad: {{ $oportunida->oportunidad }}  </h5>
    @endforeach



<div id="example"></div>
@endsection

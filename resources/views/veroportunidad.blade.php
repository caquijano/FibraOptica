@extends('layouts.admin')
@section('content')

<div class="row col-sm-12">
    <div class="card col-sm-12">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <h3 class="">Oportunidades</h3>
            {!! Form::open(['route' => ['veroportunidad'], 'method' => 'GET', 'class' => 'navbar-form-pull-right']) !!}
            <div class="input-group">
                    {!! Form::text('buscarpor', null, ['class' => 'form-group form-control mr-sm-2', 'placeholder' => 'Numero de oportunidad', 'aria-describedby' => 'buscarpor']) !!}
                    <button class="btn btn-outline-success my-2 my-sm-0" id="buscarpor">Buscar</button>
                </div>
                {!! Form::close() !!}

          </nav>
          <hr>
         
@foreach ($oportunidads as $oportunidad)

<div class="card">
    <div class="row">

    <div class="row col-sm-11">
        <div class="col-sm-1">
            <img src="images/SinFoto.jpg" class="card-img-top" alt="">
            
        </div>
        <div class="col-sm-4">
          <h1 class="card-title">Cliente: {{ $oportunidad->empresa }}</h1>
          <h4 class="card-text">Opotunidad: {{ $oportunidad->oportunidad }} </h4>
        </div>
        <div class="col-sm-4">
            <h5 class="card-text">Fecha de inicio: {{ $oportunidad->fecha_inicio }} </h5>
           <h5 class="card-title">Fecha de compromiso: {{ $oportunidad->fecha_compromiso }} </h5>
           
       </div>
        <div class="col-sm-3">
            <h5 class="card-text " >Comercial: {{ $oportunidad->nombre }} </h5>
            <h5 class="card-text">Preventa: {{ $oportunidad->ingeniero }}  </h5>
        </div>
    </div>
    
    <div class="input-group row col-sm-1 align-content-center">
        {!! Form::open(['route' => ['servicio'], 'method' => 'GET', 'class' => 'navbar-form-pull-right']) !!}
        {!! Form::hidden('enviaroportunidad',$oportunidad->numerooportunidad , ['class' => 'form-group form-control', 'aria-describedby' => 'enviaroportunidad']) !!}
        <button class="fa fa-plus-square btn btn-link" href="/servicio" id="enviaroportunidad" style="font-size:30px;color:green"></button>
        {!! Form::close() !!}  
    </div>
  
</div>
    </div>
    
@endforeach
</div>
</div>

{{ $oportunidads->links() }}
@endsection
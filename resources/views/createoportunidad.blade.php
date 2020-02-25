@extends('layouts.admin')
@section('content')

<div class="container col-sm-11 align-content-center">
 <!-- general form elements -->
 <div class="card card-primary">

    <div class="card-header">
      <h3 class="card-title">Nueva oportunidad</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
      <div class="card-body">

        <div class="row">
        <div class="col-sm-6 form-group">
          <label for="oportunidad">Numero de oportunidad</label>
          <input type="text" class="form-control" placeholder="Oportunidad">
        </div>
        <div class="col-sm-6 form-group">
          <label for="cliente">Cliente</label>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cliente">
            <button class="btn btn-success input-group-text">
                <i class="far fa fa-user-plus"></i>
            </button>
             
          </div>
         
        </div>
     </div>

     <div class="row">
        <div class="col-sm-6 form-group ">
          <label for="oportunidad">Fecha de inicio</label>
          <div class="input-group">
            <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
              <input type="date" class="form-control" placeholder="Oportunidad">
          </div>
          
          
        </div>
        <div class="col-sm-6 form-group">
          <label for="cliente">Fecha de compromiso</label>
          <div class="input-group">
            <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
              <input type="date" class="form-control" placeholder="Oportunidad">
          </div>
        </div>
     </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">¿cliente priorizado?</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
    </form>
</div>
  <!-- /.card -->


</div>


  
@endsection
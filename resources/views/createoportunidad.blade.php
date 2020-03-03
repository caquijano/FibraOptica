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
    <form  action="{{ route('createoportunidad')}}" method="POST" >
        @csrf
      <div class="card-body">

        <div class="row">
        <div class="col-sm-6 form-group">
          <label for="oportunidad">Numero de oportunidad</label>
          <input name="oportunidad" type="text" class="form-control" placeholder="Oportunidad">
        </div>
        <div class="col-sm-6 form-group">
            <label for="comercial">Comercial</label>
            <select class="custom-select" name="comercial" id="">
                <option value=""></option>
                @foreach ($empleados ?? '' as $empleado)
                 <option value="{{ $empleado['id'] }}">{{ $empleado['nombre'] }}</option>
                @endforeach
            </select>
          </div>
          <div class="col-sm-6 form-group">
            <label for="ingeniero_preventa">Ingeniero de preventa</label>
            <select class="custom-select" name="ingeniero_preventa" id="">
                <option value=""></option>
                @foreach ($empleados ?? '' as $empleado)
                 <option value="{{ $empleado['id'] }}">{{ $empleado['nombre'] }}</option>
                @endforeach
            </select>
          </div>
        <div class="col-sm-6 form-group">
          <label for="cliente">Cliente</label>
          <div class="input-group">
            <select class="custom-select" name="id_cliente" id="">
                <option value="1">1</option>
            </select>
            
            <button type="button" class="btn btn-success input-group-text" data-toggle="modal" data-target="#cliente">
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
              <input name="fecha_inicio" type="date" class="form-control" placeholder="Oportunidad">
          </div>
          
          
        </div>
        <div class="col-sm-6 form-group">
          <label for="cliente">Fecha de compromiso</label>
          <div class="input-group">
            <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
              <input name="fecha_compromiso" type="date" class="form-control" placeholder="Oportunidad">
          </div>
        </div>
     </div>
     <div class="col-sm-6 form-group">
        <label for="compromiso_activacion">Compromiso activacion</label>
        <input name="compromiso_activacion" type="text" class="form-control" placeholder="mes y semana activacion">
      </div>

        <div class="form-check">
          <input name="prioridad" type="checkbox" class="form-check-input" id="exampleCheck1" value="SI">
          <label class="form-check-label" for="exampleCheck1">¿cliente priorizado?</label>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submite" class="btn btn-primary">Crear</button>
      </div>
    </form>

    <div class="modal fade" id="cliente" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="row" action="{{ route('agregarcliente')}}" method="POST">
                    @csrf
                    <div class="col-sm-6 form-group">
                        <label for="nit">Nit</label>
                        <input name="nit" type="text" class="form-control" placeholder="Nit">
                      </div>
                      <div class="col-sm-6 form-group">
                        <label for="nombre">Razon social</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Razon social">
                      </div>
                      
                      
                      <div class="col-sm-6 form-group">
                        <label for="direccion">Direccion</label>
                        <input name="direccion" type="text" class="form-control" placeholder="Direccion">
                      </div>
                      <div class="col-sm-6 form-group">
                        <label for="encargado">Encargado</label>
                        <input name="encargado" type="text" class="form-control" placeholder="Encargado">
                      </div>
                      <div class="col-sm-6 form-group">
                        <label for="telefono">Telefono</label>
                        <input name="telefono" type="text" class="form-control" placeholder="Telefono">
                      </div>
                      <div class="col-sm-6 form-group">
                        <label for="email">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Direccion de correo">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submite" class="btn btn-primary">Crear</button>
                    </div>
                </form>
                @if(session('agregarcliente'))
                    <div class="alert alert-success mt-3">
                            {{session('agregarcliente')}}
                    </div>
                @endif

            </div>
           
            </div>
        </div>
        </div>
</div>
  <!-- /.card -->


</div>


  
@endsection
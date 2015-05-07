
@extends("layouts.master")

@section("modulo")


<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Empresa: </h3>
  </div>
  <div class="panel-body">
    {{ $datos->razon_social }}
  </div>
</div> 
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Giro de Negocio: </h3>
  </div>
  <div class="panel-body">
    {{ $datos->giro_negocio }}
  </div>
</div> 
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Reseña Historica: </h3>
  </div>
  <div class="panel-body">
    {{ $datos->resena_historica }}
  </div>
</div>  

<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <a href="{{url('/empresaEdit')}}" class="btn btn-primary">Editar</a>
            </div>
</div>

@stop
@extends("layouts.plan")

@section("modulo")
<br><br>
<h2 class="page-header">Registro de Normativa Institucional  </h2>
{{ Form::open(array('url'=>'registrarNInstitucional','method'=>'POST',
    'class'=>'form-horizontal marcosutilizar')) }}

<div class="form-group @if($errors->get('nombre')) {{'has-error'}} @endif ">
    <label class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-7">
        {{ Form::text('nombre',null,array('class'=>'form-control','placeholder'=>'ingrese Nombre','required'=>'true')) }}
    </div>
</div>
<div class="form-group @if($errors->get('descripcion')) {{'has-error'}} @endif ">
    <label class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-7">
        {{ Form::textarea('descripcion',null,array('class'=>'form-control','placeholder'=>'ingrese descripcion','required'=>'true')) }}
    </div>
</div>
<div class="form-group">
            <div class="col-sm-offset-2 ">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{url('/marcosListar')}}" class="btn  btn-danger">Cancelar</a>
            </div>
</div>

@stop
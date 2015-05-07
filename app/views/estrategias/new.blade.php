@extends("layouts.master")

@section("modulo")

{{ Form::open(array('url'=>'registrarEstrategias','method'=>'POST','class'=>'form-horizontal')) }}

<div class="form-group @if($errors->get('titulo')) {{'has-error'}} @endif ">
    <label class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-7">
        {{ Form::text('titulo',null,array('class'=>'form-control','placeholder'=>'ingrese Titulo')) }}
    </div>
</div>
<div class="form-group @if($errors->get('estrategia')) {{'has-error'}} @endif ">
    <label class="col-sm-2 control-label">Estrategia</label>
    <div class="col-sm-7">
        {{ Form::text('estrategia',null,array('class'=>'form-control','placeholder'=>'ingrese Estrategia')) }}
    </div>
</div>
<div class="form-group">
            <div class="col-sm-offset-2 ">
              <button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{url('/empresas')}}" class="btn btn-primary">Cancelar</a>
            </div>
</div>

@stop
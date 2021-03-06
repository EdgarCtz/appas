@extends("layouts.plan")

@section("modulo")
<div class="row">
  <div class="col-lg-12">
    <h2>Registro Marco Internacional</h2>
  </div>
</div>               
<hr />
<div class="row">
  <div class="col-lg-12">

        {{ Form::open(array('url'=>'registrarMInternacional',
            'method'=>'POST','class'=>'form-horizontal marcosutilizar')) }}

        <div class="form-group @if($errors->get('nombre')) {{'has-error'}} @endif ">
            <label class="col-sm-2 control-label">Nombre:</label>
            <div class="col-sm-7">
                {{ Form::text('nombre',null,array('class'=>'form-control','placeholder'=>'ingrese Nombre','required'=>'true')) }}
            </div>
        </div>
        <div class="form-group @if($errors->get('descripcion')) {{'has-error'}} @endif ">
            <label class="col-sm-2 control-label">Descripcion:</label>
            <div class="col-sm-7">
                {{ Form::textarea('descripcion',null,array('class'=>'form-control','placeholder'=>'Igrese descripcion','required'=>'true')) }}
            </div>
        </div>
        <div class="form-group">
                    <div class="col-sm-offset-2 ">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                      <a href="{{url('/marcosListar')}}" class="btn btn-danger">Cancelar</a>
                    </div>
        </div>
        {{Form::close()}}
    </div>
</div>

@stop
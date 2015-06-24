@extends("layouts.plan")

@section("modulo")
	<h2 page-header>Registro de Auditor</h2>
	{{Form::open(array('url'=>'addAuditor','id'=>'add_auditor','class'=>'form-horizontal'))}}
							<div class="form-group">
								{{Form::label('titulo','titulo: ',array('class'=>'col-sm-2 control-label'))}}
								<div class="col-sm-10">
								{{Form::text('titulo',null,array('placeholder'=>'Ingrese titulo del Prueba Sustantiva','class'=>'form-control','maxlength'=>50,'required'=>'true'));
								}}</div>
							</div>
							
							<div class="form-group">
								{{Form::label('marco','Marco: ',array('class'=>'col-sm-2 control-label'))}}
								<div class="col-sm-10">
								{{

									Form::select('marco',$marco,null,array('class'=>'form-control','id'=>'idMarco'))
								}}</div>
							</div>
								<div class="form-group">
								{{Form::label('objetivos','Objetivos: ',array('class'=>'col-sm-2 control-label'))}}
								<div class="col-sm-10">
								{{

									Form::select('objetivos',$objetivo,null,array('class'=>'form-control','id'=>'idObjetivo'))
								}}</div>
							</div>
			
							<div class="form-group">
								 <div class="col-sm-offset-2 col-sm-10">
								{{
									Form::submit('Registrar',array('class'=>'btn btn-primary'));
								}}
								<a href="{{url('/pruebasSustantivas')}}" class="btn btn-danger">Cancelar</a>
								</div>
							</div>
	{{Form::close()}}
@stop

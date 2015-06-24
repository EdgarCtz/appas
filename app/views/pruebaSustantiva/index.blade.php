@extends("layouts.plan")
@section("modulo")
	<h1 class="page-header">Cuestionarios de Pruebas Sustantivas</h1>
	<a href="{{url('/nuevoCuestionarioSustantivas')}}" class="btn btn-primary">Nuevo</a>

	<table class="table table-hover table-bordered">
	    <thead>
	        <tr>
	            <th>#</th>
	            <th>Titulo </th>
	            <th>Marco Ref/Nac/Nor</th>
	            <th>Objetivo Especifico</th>
	            <th>---</th>
	        </tr>
	    </thead>
	    <!-- <tbody>
	    		
	            
	    </tbody> -->
	</table>
	
	<br>
	<h1 class="page-header">Preguntas de Cumplimiento</h1>
	<a href="{{url('/nuevoPerfilRol')}}" class="btn btn-primary">Nuevo</a>
		<table class="table table-hover">
		    <thead>
		        <tr>
		        	<th>#</th>
		            <th>Pregunta</th>
		            <th>Respuesta</th>
		            <th>Observacion</th>
		            <th>Responsable</th>
		            <th>Prueba Sustantiva</th>
		        </tr>
		    </thead>
		    <!-- <tbody>
		    		

		            
		    </tbody> -->
		</table>
	<br>
	<h1 class="page-header">Pasos a Seguir</h1>
	<a href="{{url('/nuevoPerfilRol')}}" class="btn btn-primary">Nuevo</a>
		<table class="table table-hover">
		    <thead>
		        <tr>
		        	<th>#</th>
		            <th>Prueba Sustantiva</th>
		            <th>Pregunta</th>
		            <th>Pasos a seguir</th>
		            
		        </tr>
		    </thead>
		    <!-- <tbody>
		    		

		            
		    </tbody> -->
		</table>
		

@stop
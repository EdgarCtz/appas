@section('modulo')
	<div class="modal-open">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">{{$encabezado}}</h4>
      </div>
      <div class="modal-body">
        @foreach($cuerpo as $mensaje)
						<p>{{$mensaje}}</p>
					@endforeach
      </div>
      <div class="modal-footer">
			
		<a class="btn btn-primary" href="javascript: history.go(-1)">Regresar</a>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->				
@stop
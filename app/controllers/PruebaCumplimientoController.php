<?php 
	/**
	* 
	*/
	class PruebaCumplimientoController extends BaseController
	{
		protected $layout='layouts.plan';
		function __construct()
		{
			# code...
		}
		function listarPCumplimiento(){
			// $auditores=AuditorModel::where('planauditoria_id',Session::get('id_plan'))->get();
			// $roles=PerfilEquipoModel::where('planauditoria_id',Session::get('id_plan'))
			// 						->orderBy('rol')->lists('rol','id');
			return View::make('pruebacumplimiento.index');
		}
		function nuevaPCumplimiento(){
			$personas=PersonaEntrevistarModel::where('planauditoria_id',Session::get('id_plan'))
									->orderBy('apellidos')->lists('apellidos','id');
			return View::make('pruebacumplimiento.newprueba',array('personas'=>$personas));
		}

	}
 ?>
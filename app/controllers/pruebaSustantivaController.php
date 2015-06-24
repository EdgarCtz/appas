<?php 
	/**
	* 
	*/
	class PruebaSustantivaController extends BaseController
	{
		protected $layout='layouts.plan';
		function __construct()
		{
			# code...
		}
		function listarPSustantiva(){
			// $auditores=AuditorModel::where('planauditoria_id',Session::get('id_plan'))->get();
			// $roles=PerfilEquipoModel::where('planauditoria_id',Session::get('id_plan'))
			// 						->orderBy('rol')->lists('rol','id');
			return View::make('pruebaSustantiva.index');
		}
		function nuevoPSustantiva(){
			
			$marco=MinternacionalModel::where('planauditoria_id',Session::get('id_plan'))
									->orderBy('nombre')->lists('nombre','id');
			$objetivo=ObjetivosModel::where('planauditoria_id',Session::get('id_plan'))
									->orderBy('descripcion')->lists('descripcion','id');

			return View::make('pruebaSustantiva.newPrueba',array('marco'=>$marco,'objetivo'=>$objetivo));

		}
		function nuevaPCumplimiento(){
			$personas=PersonaEntrevistarModel::where('planauditoria_id',Session::get('id_plan'))
									->orderBy('apellidos')->lists('apellidos','id');
			return View::make('pruebacumplimiento.newprueba',array('personas'=>$personas));
		}

	}
 ?>
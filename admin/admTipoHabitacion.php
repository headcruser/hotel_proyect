<?php

//Admin/TipoHabitacion
	include('../controllers/TipoHabitacion.php');
	$web=new CTipoHabitacion;
	$accion=null; // inicia vacio
	$id_tipoHab=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		 //Obtiene los privilegios de la sesion
 		$privilegio=$web->obtenerRolSesion();

		$web->checarAcceso($privilegio);
		$header=$web->Privilegiosheader($privilegio);

		//indica la accion a realizar
	  	if( isset($_GET['accion'])){
				$accion=$_GET['accion'];
			}

		//Valida al cliente
		if (isset($_GET['id_tipoHab'])){
			$id_tipoHab=$_GET['id_tipoHab'];
			}

		switch ($accion)
			{
				case 'nuevo': //Muestra nuevo formulario
					$templates->assign('header',$header);
					$templates->display('contador/tipoHabitacion_form.html');
					die();

				break;

				//Edita un elemento
				case 'editar':
					$tipoHabitacion=$web->getTipoHabitacion($id_tipoHab);
					$templates->assign('tipoHabitacion',$tipoHabitacion[0]);
					$templates->assign('id_tipoHab',$id_tipoHab);
					$templates->assign('header',$header);
					$templates->display('contador/tipoHabitacion_form.html');
					die();
				break;


				// inserta
				case 'alta':
					// insert generico
					$web->setTabla("tipoHabitacion");
					$web->insert($_POST);
					break;

				// Actualiza
				case 'guardar':
					$web->setTabla("tipoHabitacion");
					$web->update($_POST,array('id_tipoHab'=>$_POST['id_tipoHab']));
					break;

				//Elimina
				case 'eliminar':
					$web ->deleteTipoHabitacion($id_tipoHab);
					 break;

				case 'ver':
				break;
			}

			$habitaciones=$web->fetchAll("select * from tipoHabitacion");
			$templates->assign('titulo','Tipos de Habitacion');
			$templates->assign('header',$header);
			$templates->assign('habitaciones',$habitaciones);
			$templates->display('contador/tipoHabitacion.html');
	 }
 ?>

<?php

//Admin/TipoHabitacion
	include('../controllers/tipoReserva.php');
	$web=new CTipoReserva;
	$accion=null; // inicia vacio
	$id_tipoReserva=null;
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
		 	if (isset($_GET['id_tipoReserva'])){
		 		$id_tipoReserva=$_GET['id_tipoReserva'];
		 	}

		 switch ($accion)
		 	{
		 		case 'nuevo': //Muestra nuevo formulario
		 			$templates->assign('header',$header);
		 			$templates->display('contador/tipoReserva_form.html');
		 			die();

		 		break;

		 		//Edita un elemento
		 		case 'editar':
		 			$tipoReserva=$web->gettipoReserva($id_tipoReserva);
		 			$templates->assign('tipoReserva',$tipoReserva[0]);
		 			$templates->assign('id_tipoHab',$id_tipoReserva);
		 			$templates->assign('header',$header);
		 			$templates->display('contador/tipoReserva_form.html');
		 			die();
		 		break;


		 		// inserta
		 		case 'alta':
		 			// insert generico
		 			$web->setTabla("tipoReserva");
		 			$web->insert($_POST);
		 			break;


		 		// Actualiza
		 		case 'guardar':

		 			$web->setTabla("tipoReserva");
		 			$web->update($_POST,array('id_tipoReserva'=>$_POST['id_tipoReserva']));
		 			break;

		 		//Elimina
		 		case 'eliminar':
		 			$web ->deleteTipoReserva($id_tipoReserva);
		 			 break;

		 		case 'ver':
		 		break;

		 	}
		 	$tiporeservas=$web->fetchAll("select * from tipoReserva");
		 	$templates->assign('titulo','Tipos de Reservas');
		 	$templates->assign('tipoReservas',$tiporeservas);
		 	$templates->assign('header',$header);
		 	$templates->display('contador/tipoReserva.html');
	 }
 ?>

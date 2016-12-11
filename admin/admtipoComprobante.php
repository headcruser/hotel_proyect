<?php

//Admin/TipoComprobante
	include('../controllers/tipoComprobante.php');
	$web=new CTipoComprobante;
	$accion=null; // inicia vacio
	$id_comprobante=null;
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
	 	if (isset($_GET['id_comprobante'])){
	 		$id_comprobante=$_GET['id_comprobante'];
	 	}

	 switch ($accion)
	 	{
	 		case 'nuevo': //Muestra nuevo formulario
	 			$templates->assign('header',$header);
	 			$templates->display('contador/tipoComprobante_form.html');
	 			die();

	 		break;

	 		//Edita un elemento
	 		case 'editar':
	 			$tipoComprobante=$web->getTipoComprobante($id_comprobante);
	 			$templates->assign('tipoComprobante',$tipoComprobante[0]);
	 			$templates->assign('id_comprobante',$id_comprobante);
	 			$templates->assign('header',$header);
	 			$templates->display('contador/tipoComprobante_form.html');
	 			die();
	 		break;


	 		// inserta
	 		case 'alta':
	 			// insert generico
	 			$web->setTabla("tipoComprobante");
	 			$web->insert($_POST);
	 			break;


	 		// Actualiza
	 		case 'guardar':

	 			$web->setTabla("tipoComprobante");
	 			$web->update($_POST,array('id_comprobante'=>$_POST['id_comprobante']));
	 			break;

	 		//Elimina
	 		case 'eliminar':
	 			$web ->deleteTipoComprobante($id_comprobante);
	 			 break;

	 		case 'ver':
	 		break;

	 	}

	 	$comprobantes=$web->fetchAll("select * from tipoComprobante");
	 	$templates->assign('titulo','Tipos de Comprobantes');
	 	$templates->assign('comprobantes',$comprobantes);
	 	$templates->assign('header',$header);
	 	$templates->display('contador/tipoComprobante.html');
	 }
 ?>

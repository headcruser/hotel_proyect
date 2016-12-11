<?php

//Admin/pago
	include('../controllers/pago.php');
	$web=new CPago;
	$accion=null; // inicia vacio
	$id_pago=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		//Obtiene los privilegios de la sesion 
 		 $privilegio=$web->obtenerRolSesion();

		 $web->checarAcceso($privilegio);
	 	$header=$web->Privilegiosheader($privilegio);

	 	//indica la accion a realizar
	   	if( isset($_GET['accion']))
	 	{
	 		$accion=$_GET['accion'];
	 	}

	 	//Valida al cliente
	 	if (isset($_GET['id_pago']))
	 	{
	 		$id_pago=$_GET['id_pago'];
	 	}

	 switch ($accion)
	 	{
	 		case 'nuevo': //Muestra el formulario

	 			$comboReserva=$web->showList('select id_reserva,fechaReserva from reserva');
	 			$comboProducto=$web->showList('select id_producto,nombre from producto');
	 			$comboComprobante=$web->showList('select id_comprobante,descripcion from tipoComprobante');
	 			$templates->assign('comboReserva',$comboReserva);
	 			$templates->assign('comboProducto',$comboProducto);
	 			$templates->assign('comboComprobante',$comboComprobante);
	 			$templates->assign('header',$header);
	 			$templates->display('contador/pago_form.html');
	 			die();

	 		break;

	 		//Edita
	 		case 'editar':
	 			$pago=$web->getPago($id_pago);
	 			$comboReserva=$web->showList('select id_reserva,fechaReserva from reserva',$pago[0]['id_reserva']);
	 			$comboProducto=$web->showList('select id_producto,nombre from producto',$pago[0]['id_producto']);
	 			$comboComprobante=$web->showList('select id_comprobante,descripcion from tipoComprobante',$pago[0]['id_comprobante']);
	 			$templates->assign('comboReserva',$comboReserva);
	 			$templates->assign('comboProducto',$comboProducto);
	 			$templates->assign('comboComprobante',$comboComprobante);
	 			$templates->assign('pago',$pago[0]);
	 			$templates->assign('id_pago',$id_pago);
	 			$templates->assign('header',$header);
	 			$templates->display('contador/pago_form.html');
	 			die();
	 		break;

	 		// inserta un nuevo cliente
	 		case 'alta':
	 			// insert generico
	 			$web->setTabla("pago");
	 			$web->insert($_POST);
	 			break;

	 		// Actualiza
	 		case 'guardar':

	 			$web->setTabla("pago");
	 			$web->update($_POST,array('id_pago'=>$_POST['id_pago']));
	 			break;

	 		//Elimina
	 		case 'eliminar':
	 			$web ->deletePago($id_pago);
	 			 break;

	 		case 'ver':
	 		break;

	 	}

	 	$pagos=$web->fetchAll("select * from pago");
	 	$templates->assign('titulo','PAGOS ENCONTRADOS');
	 	$templates->assign('pagos',$pagos);
	 	$templates->assign('header',$header);
	 	$templates->display('contador/pago.html');
	 }
 ?>

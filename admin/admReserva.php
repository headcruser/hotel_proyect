<?php

//Admin/reserva
	include('../controllers/reserva.php');
	$web=new CReserva;
	$accion=null; // inicia vacio
	$id_reserva=null;
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

		 	//Valida
		 	if (isset($_GET['id_reserva'])){
		 		$id_reserva=$_GET['id_reserva'];
		 	}

		 switch ($accion)
		 	{
		 		case 'nuevo': //Muestra el formulario

		 			$combohabitacion=$web->showList('select id_habitacion,numero from habitacion');
		 			$comboReserva=$web->showList('select id_tipoReserva,descripcion from tipoReserva');
		 			$comboEmpleado=$web->showList('select id_empleado,nombre from empleado');
		 			$comboCliente=$web->showList('select id_cliente,nombre from cliente');
		 			$comboEstado=$web->showList('select id_estado,descripcion from estado');

		 			$templates->assign('comboHabitacion',$combohabitacion);
		 			$templates->assign('header',$header);
		 			$templates->assign('comboReserva',$comboReserva);
		 			$templates->assign('comboEmpleado',$comboEmpleado);
		 			$templates->assign('comboCliente',$comboCliente);
		 			$templates->assign('comboEstado',$comboEstado);
		 			$templates->display('contador/reserva_form.html');
		 			die();

		 		break;

		 		//Edita
		 		case 'editar':
		 			$reserva=$web->getReserva($id_reserva);
		 			$combohabitacion=$web->showList('select id_habitacion,numero from habitacion',$reserva[0]['id_habitacion']);
		 			$comboReserva=$web->showList('select id_tipoReserva,descripcion from tipoReserva',$reserva[0]['id_tipoReserva']);
		 			$comboEmpleado=$web->showList('select id_empleado,nombre from empleado'   ,$reserva[0]['id_empleado']);
		 			$comboCliente=$web->showList('select id_cliente,nombre from cliente'      ,$reserva[0]['id_cliente']);
		 			$comboEstado=$web->showList('select id_estado,descripcion from estado',$reserva[0]['id_estado']);

		 			$templates->assign('reserva',$reserva[0]);
		 			$templates->assign('comboHabitacion',$combohabitacion);
		 			$templates->assign('comboReserva',$comboReserva);
		 			$templates->assign('comboEmpleado',$comboEmpleado);
		 			$templates->assign('comboCliente',$comboCliente);
		 			$templates->assign('comboEstado',$comboEstado);
		 			$templates->assign('id_reserva',$id_reserva);
		 			$templates->assign('header',$header);
		 			$templates->display('contador/reserva_form.html');
		 			die();
		 		break;


		 		// inserta
		 		case 'alta':
		 			// insert generico

		 			// print_r($_POST);
		 			// die();
		 			$web->setTabla("reserva");
		 			$web->insert($_POST);
		 			break;


		 		// Actualiza
		 		case 'guardar':

		 			$web->setTabla("reserva");
		 			$web->update($_POST,array('id_reserva'=>$_POST['id_reserva']));
		 			break;

		 		//Elimina
		 		case 'eliminar':
		 			$web ->deleteReserva($id_reserva);
		 			 break;

		 		case 'ver':break;
		 	}


		 	$reserva=$web->fetchAll("select * from reserva");
		 	$templates->assign('titulo','Reservaciones Disponibles');
		 	$templates->assign('reservas',$reserva);
		 	$templates->assign('header',$header);
		 	$templates->display('contador/reserva.html');
	 }
 ?>

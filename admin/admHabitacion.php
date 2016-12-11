<?php

//Admin/habitacion
	include('../controllers/habitacion.php');
	$web=new CHabitacion;
	$accion=null; // inicia vacio
	$id_habitacion=null;
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

			//Valida
			if (isset($_GET['id_habitacion']))
			{
				$id_habitacion=$_GET['id_habitacion'];
			}

		switch ($accion)
			{
				case 'nuevo': //Muestra el formulario
					$comboEstado=$web->showList('select id_estado,descripcion from estado');

					$combohabitacion=$web->showList('select id_tipoHab,descripcion from tipoHabitacion');

					$templates->assign('comboEstado',$comboEstado);
					$templates->assign('comboHabitacion',$combohabitacion);
					$templates->assign('header',$header);
					$templates->display('contador/habitacion_form.html');
					die();

				break;

				//Edita
				case 'editar':

					$habitacion=$web->getHabitacion($id_habitacion);

					// Se añade el combo box de los estados para insertarlos
					$comboEstado=$web->showList('select id_estado,descripcion from estado',$habitacion[0]['id_estado']);

					$comboHabitacion=$web->showList('select id_tipoHab,descripcion from tipoHabitacion',$habitacion[0]['id_tipoHab']);

					$templates->assign('comboEstado',$comboEstado); 			// Se agrega el combo tipo
			  	$templates->assign('comboHabitacion',$comboHabitacion);	//se agrega
					$templates->assign('header',$header);
					$templates->assign('habitacion',$habitacion[0]);
					$templates->assign('id_habitacion',$id_habitacion);
					$templates->display('contador/habitacion_form.html');
					die();
				break;


				// inserta
				case 'alta':
					$web->setTabla("habitacion");
					$web->insert($_POST);
					break;

				// Actualiza
				case 'guardar':
					$web->setTabla("habitacion");
					$web->update($_POST,array('id_habitacion'=>$_POST['id_habitacion']));
					break;

				//Elimina
				case 'eliminar':
					$web ->deleteHabitacion($id_habitacion);
					 break;

				case 'ver':
				break;

			}

			$habitaciones=$web->fetchAll(" select * from habitacion");
			$templates->assign('titulo','Habitaciones Disponibles');
			$templates->assign('habitaciones',$habitaciones);
			$templates->assign('header',$header);
			$templates->display('contador/habitacion.html');

	 }
 ?>

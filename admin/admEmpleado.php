<?php
	//Admin/Empleado
	
	include('../controllers/empleado.php');
	$web=new CEmpleado;

	//Inicializar elementos
	$accion=null;
	$id_empleado=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
	 	$privilegio=$web->obtenerRolSesion();
		$web->checarAcceso($privilegio);
		$header=$web->Privilegiosheader($privilegio);



		//indica la accion a realizar
		  if( isset($_GET['accion'])){
				$accion=$_GET['accion'];
			}

		//Valida al cliente
		if (isset($_GET['id_empleado'])){
			$id_empleado=$_GET['id_empleado'];
		}

		switch ($accion)
			{
					case 'nuevo': //Muestra el formulario
						$comboEstado=$web->showList('select id_estado,descripcion from estado');
						$comboUsuario=$web->showList('select id_usuario,email from usuario');
						$templates->assign('comboEstado',$comboEstado);
						$templates->assign('comboUsuario',$comboUsuario);
						$templates->assign('header',$header);
						$templates->display('contador/empleado_form.html');
						die();

					break;

					//Edita
					case 'editar':
						$Empleado=$web->getEmpleado($id_empleado);

						// Se añade el combo box de los estados para insertarlos
						$comboEstado=$web->showList('select id_estado,descripcion from estado',$Empleado[0]['id_estado']);
						$comboUsuario=$web->showList('select id_usuario,email from usuario',$Empleado[0]['id_usuario']);

						$templates->assign('comboEstado',$comboEstado);
						$templates->assign('comboUsuario',$comboUsuario);
						$templates->assign('empleados',$Empleado[0]);
						$templates->assign('id_empleado',$id_empleado);
						$templates->assign('header',$header);
						$templates->display('contador/empleado_form.html');
						die();
					break;

					// inserta
					case 'alta':
						// insert generico
						$web->setTabla("empleado");
						$web->insert($_POST);
						break;

					// Actualiza
					case 'guardar':

						$web->setTabla("empleado");
						$web->update($_POST,array('id_empleado'=>$_POST['id_empleado']));
						break;

					//Elimina
					case 'eliminar':
						$web ->deleteEmpleado($id_empleado);
						 break;

					case 'ver':
					break;
				}
			$empleados=$web->fetchAll("select * from listaEmpleados ");
			$templates->assign('titulo','Empleados Disponibles');
			$templates->assign('empleados',$empleados);
			$templates->assign('header',$header);
			$templates->display('contador/empleado.html');
	 }
 ?>

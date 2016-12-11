<?php
	/**Formulario que muestra los roles*/
	include('../controllers/rol.php');

	$web=new rol; //Crea un objeto

	//Elementos que inician vacios
	$accion=null;
	$id_rol=null;
	$privilegio=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	if(isset($_SESSION))
	{
			//Obtiene los privilegios de la sesion
		 $privilegio=$web->obtenerRolSesion();
		 $web->checarAcceso($privilegio); // indica que es un usuario predeterminado
	 	 $header=$web->Privilegiosheader($privilegio);

	 	//Obtiene la accion seleccionada por el usuario
	 	if( isset($_GET['accion']))
	 	{
	 		$accion=$_GET['accion'];
	 	}

	 	if (isset($_GET['id_rol']))
	 	{
	 		//Obtener el id
	 		$id_rol=$_GET['id_rol'];
	 	}


	 	switch ($accion)
	 	{
	 		case 'nuevo': //Muestra el formulario
	 			$templates->assign('header',$header);
	 			$templates->display('admin/rol_alta.html');
	 			die();

	 		break;

	 		//Edita
	 		case 'editar':
	 			$rol=$web->getRol($id_rol);
	 			$templates->assign('rol',$rol[0]);
	 			$templates->assign('id_rol',$id_rol);
	 			$templates->assign('header',$header);
	 			$templates->display('admin/rol_alta.html');
	 			die();
	 		break;


	 		// inserta un nuevo cliente
	 		case 'alta':
	 			// insert generico
	 			$web->setTabla("rol");
	 			$web->insert($_POST);
	 			break;


	 		// Actualiza la infromacion del cliente
	 		case 'guardar':

	 			$web->setTabla("rol");
	 			$web->update($_POST,array('id_rol'=>$_POST['id_rol']));
	 			break;

	 		//Elimina a un cliente de la base de datos
	 		case 'eliminar':
	 			$web ->deleteRol($id_rol);
	 			 break;

	 		case 'ver':
	 		break;
	 	}

	 	//Muestra la tabla de clientes registrados
	 	$rol=$web->fetchAll('select * from rol');
	 	$templates->assign('titulo','ROLES DISPONIBLES');
	 	$templates->assign('rol',$rol);
	 	$templates->assign('header',$header);
	 	$templates->display('admin/rol.html');
	}
 ?>

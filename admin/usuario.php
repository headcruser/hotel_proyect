<?php

//Admin/usuario
	include('../controllers/usuario.php');

	$web=new usuario; //Crea un objeto de la clase

	//Elementos que inician vacios
	$accion=null;
	$id_usuario=null;
	$privilegio=null;

	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		 //Obtiene los privilegios de la sesion
		 $privilegio=$web->obtenerRolSesion();

		 $web->checarAcceso($privilegio);
	 	 $header=$web->Privilegiosheader($privilegio);

		 	//Obtiene la accion seleccionada por el usuario
		 	if( isset($_GET['accion'])){
		 		$accion=$_GET['accion'];
		 	}

		 	if (isset($_GET['id_usuario'])){
		 		//Obtener el id
		 		$id_usuario=$_GET['id_usuario'];
		 	}


		 	switch ($accion)
		 	{
		 		case 'nuevo': //Muestra el formulario

		 			$templates->assign('header',$header);
		 			$templates->display('admin/usuario_alta.html');
		 			die();
		 		break;

		 		//Editar
		 		case 'editar':
		 			$usuario=$web->getUsuario($id_usuario);
		 			$templates->assign('usuario',$usuario[0]);
		 			$templates->assign('id_usuario',$id_usuario);
		 			$templates->assign('header',$header);
		 			$templates->display('admin/usuario_alta.html');

		 			die();
		 		break;


		 		// inserta un nuevo cliente
		 		case 'alta':
		 			// insert generico
		 			$web->setTabla("usuario");
		 			$_POST['contrasena']=md5($_POST['contrasena']);
		 			$web->insert($_POST);
		 			break;


		 		// Actualiza
		 		case 'guardar':


		 			if(empty($_POST['contrasena']))
		 			{
		 				unset($_POST['contrasena']);
		 			}
		 			else
		 			{
		 				$_POST['contrasena']=md5($_POST['contrasena']);
		 			}

		 			$web->setTabla("usuario");
		 			$web->update($_POST,array('id_usuario'=>$_POST['id_usuario']));

		 			break;
		 		//Elimina
		 		case 'eliminar':
		 			$web ->deleteUsuario($id_usuario);
		 			 break;

		 		case 'ver':
		 		break;

		 	}

		 	//Muestra la tabla de clientes registrados
		 	$usuario=$web->fetchAll('select * from usuario');
		 	$templates->assign('titulo','USUARIOS DISPONIBLES');
		 	$templates->assign('usuario',$usuario);
		 	$templates->assign('header',$header);
		 	$templates->display('admin/usuario.html');
	 }
 ?>

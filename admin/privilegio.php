<?php

//Admin/clientes
	include('../controllers/privilegio.php');

	$web=new privilegios;

	//Elementos que inician vacios
	$accion=null;
	$id_privilegio=null;
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
		if( isset($_GET['accion'])){
			$accion=$_GET['accion'];
		}

		if (isset($_GET['id_privilegio'])){
			//Obtener el id del cliente
			$id_privilegio=$_GET['id_privilegio'];
		}

		switch ($accion)
		{
			case 'nuevo': //Muestra el formulario
				$templates->assign('header',$header);
				$templates->display('admin/privilegio_alta.html');
				die();
			break;

			//Edita
			case 'editar':

				$privilegio=$web->getPrivilegio($id_privilegio);
				$templates->assign('privilegio',$privilegio[0]);
				$templates->assign('id_privilegio',$id_privilegio);
				$templates->assign('header',$header);
				$templates->display('admin/privilegio_alta.html');
				die();
			break;

			// inserta
			case 'alta':
				// insert generico
				$web->setTabla("privilegio");
				$web->insert($_POST);
				break;

			// Actualiza
			case 'guardar':

				$web->setTabla("privilegio");
				$web->update($_POST,array('id_privilegio'=>$_POST['id_privilegio']));
				break;

			//Elimina
			case 'eliminar':
				$web ->deletePrivilegio($id_privilegio);
				 break;

			case 'ver':
			break;
		}

		//Muestra la tabla
		$privilegio=$web->fetchAll('select * from privilegio');
		$templates->assign('titulo','Privilegios Disponibles');
		$templates->assign('privilegio',$privilegio);
		$templates->assign('header',$header);
		$templates->display('admin/privilegio.html');
	}
 ?>

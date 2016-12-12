<?php

	//Admin/rol_privilegio
	include('../controllers/rol_privilegio.php');

	$web=new rol_privilegio; //Crea un objeto
	//Elementos que inician vacios
	$accion=null;
	$id_rol=null;
	$id_privilegio=null;
	$privilegio=null;

	$templates=$web->template();

	// // Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		 //Obtiene los privilegios de la sesion
 		$privilegio=$web->obtenerRolSesion();
		$header=$web->Privilegiosheader($privilegio);
		$header=$web->Privilegiosheader($privilegio);

	 }

		//Obtiene la accion seleccionada por el usuario
		if( isset($_GET['accion']))
		{
			$accion=$_GET['accion'];
		}

		if (isset($_GET['id_rol']) && isset($_GET['id_privilegio']))
		{
			//Obtener el id del estado
			$id_rol=$_GET['id_rol'];
			$id_privilegio=$_GET['id_privilegio'];
		}

		switch ($accion)
		{
			case 'nuevo':

			// Construye los combos
			$combo_rol=$web->showList('select id_rol,rol from rol');
			$combo_privilegio=$web->showList('select id_privilegio,privilegio from privilegio');

			//Asigna variables
			$templates->assign('combo_rol',$combo_rol);
			$templates->assign('combo_privilegio',$combo_privilegio);
			$templates->assign('header',$header);

			//Muestra el formulario
			$templates->display('admin/rol_privilegio_alta.html');
			die();

			break;

			//Edita al Estado seleccionado
			case 'editar':

			 $rol_privilegio=$web->getRolPrivilegio($id_rol,$id_privilegio);
			 $combo_rol=$web->showList('select id_rol,rol from rol',$rol_privilegio[0]['id_rol']);
			 $combo_privilegio=$web->showList('select id_privilegio,privilegio from privilegio',$rol_privilegio[0]['id_privilegio']);

		   $templates->assign('combo_rol',$combo_rol);
		   $templates->assign('combo_privilegio',$combo_privilegio);

		   $templates->assign('rol_privilegio',$rol_privilegio[0]);
			 $templates->assign('id_rol',$id_rol);
			 $templates->assign('id_privilegio',$id_privilegio);
			 $templates->assign('header',$header);
			 $templates->display('admin/rol_privilegio_alta.html');

			 die();
			break;


			// inserta
			case 'alta':

				$web->setTabla("rol_privilegio");
				$web->insert($_POST);
				break;


			// Actualiza
			case 'guardar':
			if(isset($_POST))
				{

					$id_rolAux=$_POST['nee1'];
					$id_privilegioAux=$_POST['nee2'];
					 unset($_POST['nee1']);
					 unset($_POST['nee2']);
					$web->updateRolPrivilegio($_POST,$id_rolAux,$id_privilegioAux);
				}

				break;

			//Elimina a un Estado de la base de datos
			case 'eliminar':
					$web ->deleteRolPrivilegio($id_rol,$id_privilegio);
				 break;

			case 'ver':
			break;
		}


		//Muestra la tabla de los rols registrados
		$rol=$web->fetchAll('select rol.rol,privilegio.privilegio,rol.id_rol,privilegio.id_privilegio
																 from rol_privilegio
		 														 inner join rol on rol_privilegio.id_rol=rol.id_rol
																 inner join privilegio on rol_privilegio.id_privilegio=privilegio.id_privilegio
																 ');
		$templates->assign('titulo','Roles Disponibles');
		$templates->assign('rol',$rol);
		$templates->assign('header',$header);
		$templates->display('admin/rol_privilegio.html');

 ?>

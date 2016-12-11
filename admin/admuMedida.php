<?php

//Admin/uMedida
	include('../controllers/uMedida.php');
	$web=new CuMedida;
	$accion=null; // inicia vacio
	$id_uMedida=null;
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
		 	if (isset($_GET['id_uMedida'])){
		 		$id_uMedida=$_GET['id_uMedida'];
		 	}

		 switch ($accion)
		 	{
		 		case 'nuevo': //Muestra nuevo formulario
		 			$templates->assign('header',$header);
		 			$templates->display('contador/uMedida_form.html');
		 			die();

		 		break;

		 		//Edita un elemento
		 		case 'editar':
		 			$umedida=$web->getuMedida($id_uMedida);
		 			$templates->assign('umedida',$umedida[0]);
		 			$templates->assign('id_uMedida',$id_uMedida);
		 			$templates->assign('header',$header);
		 			$templates->display('contador/uMedida_form.html');
		 			die();
		 		break;

		 		// inserta
		 		case 'alta':
		 			// insert generico
		 			$web->setTabla("uMedida");
		 			$web->insert($_POST);
		 			break;
					
		 		// Actualiza
		 		case 'guardar':

		 			$web->setTabla("uMedida");
		 			$web->update($_POST,array('id_uMedida'=>$_POST['id_uMedida']));
		 			break;

		 		//Elimina
		 		case 'eliminar':
		 			$web ->deleteuMedida($id_uMedida);
		 			 break;

		 		case 'ver':
		 		break;
		 	}

		 	$medidas=$web->fetchAll("select * from uMedida");
		 	$templates->assign('titulo','Tipos de Unidad de medida');
		 	$templates->assign('uMedidas',$medidas);
		 	$templates->assign('header',$header);
		 	$templates->display('contador/uMedida.html');
	 }
 ?>

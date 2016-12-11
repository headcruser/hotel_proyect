<?php

	include('../controllers/producto.php');
	$web=new CProducto;
	$accion=null; // inicia vacio
	$idProducto=null;
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
	 	if (isset($_GET['idProducto'])){
	 		$idProducto=$_GET['idProducto'];
	 	}

	 switch ($accion)
	 	{
	 		case 'nuevo': //Muestra el formulario
	 			$templates->assign('header',$header);
	 			$templates->display('contador/productos_form.html');
	 			die();

	 		break;

	 		//Edita
	 		case 'editar':
	 			$producto=$web->getProducto($idProducto);
	 			$templates->assign('producto',$producto[0]);
	 			$templates->assign('idProducto',$idProducto);
	 			$templates->assign('header',$header);
	 			$templates->display('contador/productos_form.html');
	 			die();
	 		break;

	 		// inserta
	 		case 'alta':
	 			// insert generico
	 			$web->setTabla("producto");
	 			$web->insert($_POST);
	 			break;


	 		// Actualiza
	 		case 'guardar':

	 			$web->setTabla("producto");
	 			$web->update($_POST,array('idProducto'=>$_POST['idProducto']));
	 			break;

	 		//Elimina
	 		case 'eliminar':
	 			$web ->deleteProducto($idProducto);
	 			 break;

	 		case 'ver':
	 		break;
	 	}

	 	$producto=$web->fetchAll("select id_producto,nombre,descripcion,precio,(select descripcion from uMedida where id_uMedida=producto.id_uMedida)as Medida,id_uMedida from producto ");
	 	$templates->assign('titulo','Productos Disponibles');
	 	$templates->assign('productos',$producto);
	 	$templates->assign('header',$header);
	 	$templates->display('contador/productos.html');
	 }
 ?>

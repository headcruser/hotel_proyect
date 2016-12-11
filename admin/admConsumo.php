<?php

//Admin/consumo
	include('../controllers/consumo.php');
	$web=new CConsumo;
	$accion=null; // inicia vacio
	$id_consumo=null;
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

			//Valida
			if (isset($_GET['id_consumo'])){
				$id_consumo=$_GET['id_consumo'];
			}

		switch ($accion)
			{
				case 'nuevo': //Muestra el formulario

					$comboProducto=$web->showList('select id_producto,nombre  from producto');
				  $comboReserva=$web->showList('select id_reserva,fechaReserva from reserva');
				  $templates->assign('comboProducto',$comboProducto);
					$templates->assign('comboReserva',$comboReserva);
					$templates->assign('header',$header);
					$templates->display('contador/consumo_form.html');
					die();

				break;

				//Edita
				case 'editar':
					$consumo=$web->getConsumo($id_consumo);
					$comboProducto=$web->showList('select id_producto,nombre from producto',$consumo[0]['id_producto']);
					$comboReserva=$web->showList('select id_reserva,fechaReserva from reserva',$consumo[0]['id_reserva']);
					$templates->assign('header',$header);
					$templates->assign('consumos',$consumo[0]);
					$templates->assign('comboProducto',$comboProducto);
					$templates->assign('comboReserva',$comboReserva);
					$templates->assign('id_consumo',$id_consumo);
					$templates->display('contador/consumo_form.html');
					die();
				break;


				// inserta
				case 'alta':
					// insert generico
					$web->setTabla("consumo");
					$web->insert($_POST);
					break;


				// Actualiza
				case 'guardar':

					$web->setTabla("consumo");
					$web->update($_POST,array('id_consumo'=>$_POST['id_consumo']));
					break;

				//Elimina
				case 'eliminar':
					$web ->deleteConsumo($id_consumo);
					 break;

				case 'ver':
				break;

			} // Fin del switch

			$consumos=$web->fetchAll("select * from consumo");
			$templates->assign('titulo','Consumos Disponibles');
			$templates->assign('consumos',$consumos);
			$templates->assign('header',$header);
			$templates->display('contador/consumo.html');
	 }
 ?>

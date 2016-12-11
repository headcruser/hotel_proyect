<?php

//Admin/clientes
	include('../controllers/cliente.php');
	$web=new Clientes;
	$accion=null; // inicia vacio
	$idcliente=null;
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
			if (isset($_GET['id_cliente']))
			{
				$idcliente=$_GET['id_cliente'];
			}

		switch ($accion)
			{
				case 'nuevo': //Muestra el formulario
					$comboUsuario=$web->showList('select id_usuario,email from usuario');
					$templates->assign('comboUsuario',$comboUsuario);
					$templates->assign('header',$header);
					$templates->display('contador/clientes_form.html');
					die();

				break;

				//Edita al cliente registrado en la base de datos
				case 'editar':
					$cliente=$web->getCliente($idcliente);
					$comboUsuario=$web->showList('select id_usuario,email from usuario',$cliente[0]['id_usuario']);
					$templates->assign('comboUsuario',$comboUsuario);
					$templates->assign('cliente',$cliente[0]);
					$templates->assign('id_cliente',$idcliente);
					$templates->assign('header',$header);
					$templates->display('contador/clientes_form.html');
					die();
				break;


				// inserta un nuevo cliente
				case 'alta':
					// insert generico
					$web->setTabla("cliente");
					$web->insert($_POST);
					break;


				// Actualiza la infromacion del cliente
				case 'guardar':

					$web->setTabla("cliente");
					$web->update($_POST,array('id_cliente'=>$_POST['id_cliente']));
					break;

				//Elimina a un cliente de la base de datos
				case 'eliminar':
					$web ->deleteCliente($idcliente);
					 break;

				case 'ver':
				break;

			}
			$Clientes=$web->fetchAll("select * from cliente");
			$templates->assign('titulo','Clientes Disponibles');
			$templates->assign('clientes',$Clientes);
			$templates->assign('header',$header);
			$templates->display('contador/clientes.html');
	 }
 ?>

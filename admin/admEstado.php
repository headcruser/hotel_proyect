<?php

//Admin/Estado
	include('../controllers/estado.php');
	$web=new CEstado;
	$accion=null; // inicia vacio
	$id_estado=null;
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
			if (isset($_GET['id_estado'])){
				$id_estado=$_GET['id_estado'];
			}

	switch ($accion)
		{
			case 'nuevo': //Muestra nuevo formulario
				$templates->assign('header',$header);
				$templates->display('contador/estado_form.html');
				die();

			break;

			//Edita un elemento
			case 'editar':
				$estado=$web->getEstado($id_estado);
				$templates->assign('estado',$estado[0]);
				$templates->assign('id_estado',$id_estado);
				$templates->assign('header',$header);
				$templates->display('contador/estado_form.html');
				die();
			break;
			// inserta
			case 'alta':
				// insert generico

				$web->setTabla("estado");
				$web->insert($_POST);
				break;


			// Actualiza
			case 'guardar':

				$web->setTabla("estado");
				$web->update($_POST,array('id_estado'=>$_POST['id_estado']));
				break;

			//Elimina
			case 'eliminar':
				$web ->deleteEstado($id_estado);
				 break;

			case 'ver':
			break;
		}

		$estados=$web->fetchAll("select * from estado");
		$templates->assign('titulo','Estado del elemento');
		$templates->assign('estados',$estados);
		$templates->assign('header',$header);
		$templates->display('contador/estado.html');
	 }
 ?>

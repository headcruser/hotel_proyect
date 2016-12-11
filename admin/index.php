<?php
	include('../hotel_class.php');

	$web=new Chotel;
	$templates=$web->template(); //Inicializo smarty
	$privilegio=null;

	 if(isset($_SESSION))
	 {
		 //Obtiene los privilegios de la sesion
 	 	 $privilegio=$web->obtenerRolSesion();

		 //Login es el usuario predeterminado
		 $web->checarAcceso($privilegio);
		 $header=$web->Privilegiosheader($privilegio);

		$usuario=$web->fetchAll('select foto
							from usuario where id_usuario='.$_SESSION['id_usuario']);


		if(!empty ($usuario)){
			//no hay foto
			$templates->assign('flag','true');
		
		}
		else {
			//si hay foto
			$templates->assign('flag','false');
			
		}

		//Asigno variables
		$templates->assign('titulo',$_SESSION['email']);
		$templates->assign('header',$header);
		$templates->display('index.html');
	 }
 ?>

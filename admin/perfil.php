<?php
	/**Formulario que muestra la informacion de los clientes */
	include('../hotel_class.php');
	$web=new Chotel; //Crea un objeto de la clase clientes
	$templates=$web->template();

	//Elementos que inician vacios
	$accion=null;
	$privilegio=null;


	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		 	//Obtiene los privilegios de la sesion
 	 	 	$privilegio=$web->obtenerRolSesion();

			 // $web->checarAcceso($privilegio); // policia
		 	$header=$web->Privilegiosheader($privilegio); //Crea el header
		 	$web->checarAcceso($privilegio);

		 	
		 	//Obtiene la accion seleccionada por el usuario
		 	if( isset($_GET['accion']))
		 	{
		 		$accion=$_GET['accion'];
		 		switch ($accion)
		 		{
		 		 case 'guardar': //Guarda el formulario

	 			  if(empty($_POST['contrasena'])){
	 				unset($_POST['contrasena']);
	 				}
	 				else{
	 					$_POST['contrasena']=md5($_POST['contrasena']);
	 				}

		 	      $_POST['id_usuario']=$_SESSION['id_usuario'];

		 	      $web->setTabla("usuario");
		 	      $web->update($_POST,array('id_usuario'=>$_SESSION['id_usuario']));


		     		if( $_FILES['foto']['error']==0)
		     		{
	 					$temporal=$_FILES['foto']['tmp_name'];
	 					$fp=fopen($temporal,'rb');  //guardar archivo
	 					$SQL='UPDATE usuario set foto=? where id_usuario='.$_SESSION['id_usuario'];
	 					$statement=$web->conDB->Prepare($SQL);
	 					$statement->bindParam(1,$fp,PDO::PARAM_LOB);
	 					$statement->execute();
		 			}

		 			break;
		 		} // fin del switch
		 	} // fin del if

		 	//Muestra el perfil del usuario
		 	$foto=$web->fetchAll('select foto from usuario where id_usuario='.$_SESSION['id_usuario']);
		 	if(empty ($foto)){
		 	$templates->assign('flag','false');
		 	}
		 	else {
		 		$templates->assign('flag','true');
		 	}

		 	$SQL="select * from usuario where id_usuario=".$_SESSION['id_usuario'];
		 	$usuario=$web->getAll($SQL);
		    $templates->assign("usuario",$usuario[0]);
		 	$templates->assign('header',$header);
		 	$templates->display('perfil.html');
	 }
 ?>

<?php
	/**Formulario que construye un reporte de los usuarios*/
	include('../hotel_class.php');

	$web=new Chotel; //Crea un objeto de la clase principal
	$privilegio=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
		 //Obtiene los privilegios de la sesion
		 $privilegio=$web->obtenerRolSesion();
		 $web->checarAcceso($privilegio);
		 $header=$web->Privilegiosheader($privilegio);

		//Por alguna razon postgress no me dejo incluir la consulta de arriba

		$reporte1=$web->getQueryHtml("select nombre,rfc,direccion,telefono, (select email from usuario where id_usuario=cliente.id_usuario) as usuario from cliente");

		$templates->assign('reporte1',$reporte1);
		$templates->assign('header',$header);
		$templates->display('reporte.html');
	 }
 ?>

<?php
  include('../hotel_class.php');
  $web=new Chotel;
  $templates = $web->template();
  $templates->setTemplateDir("../templates/cliente");

  // Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }

	$web->checarAcceso($privilegio); // policia
	$header=$web->Privilegiosheader($privilegio); //Crea el header

  $email = "";
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }
  // print_r($_SESSION);
  $templates->assign('titulo', 'Cliente');
  $templates->assign('header', $header);
  $templates->assign('email', $email);
  $templates->display('index.html');
?>

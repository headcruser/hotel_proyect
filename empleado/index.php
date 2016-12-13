<?php
  include('../cp_web_class.php');
  $web=new Cpweb;
  $templates = $web->template();
  $templates->setTemplateDir("../templates/cliente");

  // Validacion para saber que tipo de header construir

  $privilegio=$web->obtenerRolSesion();

  //Login es el usuario predeterminado
  $web->checarAcceso($privilegio);
  $header=$web->Privilegiosheader($privilegio);

  $email = "";
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }
  // print_r($_SESSION);
  $templates->assign('titulo', 'Login');
  $templates->assign('header', $header);
  $templates->assign('email', $email);
  $templates->display('index.html');
?>

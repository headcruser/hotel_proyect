<?php
/* Smarty version 3.1.30, created on 2016-12-07 07:17:54
  from "C:\xampp\htdocs\hotel_proyect\templates\forgot_recuperar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847a9923ccd12_97687067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d186ca6f22a8b229aaddbda5ea7fde52eefc3a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\forgot_recuperar.html',
      1 => 1481091416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5847a9923ccd12_97687067 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restablecer contraseña</title>
		<link rel="shortcut icon" href="../img/iconHotel.png">
		<link rel="stylesheet" type="text/css" href="../css/login.css" >
		<link rel="stylesheet" type="text/css" href="../css/flat.css" >
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="../css/main.css" >
	</head>
	<body>
		<div class="container well" id="sha" >

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Restablecimiento de contraseña</h3>
						</div>
				 </div>

				 <!-- formulario para las contraseñas  -->
				 <form class="login" method="POST" action="forgot.php?accion=restablecer">

						<div class="form-group">
								<input type="text" class="form-control" name="contrasena" placeholder="Nueva Contraseña"  required autofocus >
						</div>

						<div class="form-grup">
								<input type="password" class="form-control" name="contrasena2" placeholder="Confirme Contrasena">
						</div>

							<?php if (isset($_smarty_tpl->tpl_vars['clave']->value)) {?>
							<input type="hidden" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['clave']->value;?>
">
							<?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
							<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
							<?php }?>

						<!--BOTON DE ENVIAR  -->
							<div class="form-grup">
								<div class="enviar">
									<p> <input class="btn btn-primary btn-lg active" type="submit"  value="Restablecer"></p>
								</div>

							</div>


				 </form>


				<?php if (isset($_smarty_tpl->tpl_vars['pass']->value)) {?>
					<div class="media">
							<div class="alert alert-danger" role="alert">
							<strong> ERROR:</strong>
							<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>

							</div>
					</div>
				<?php }?>
		</div>

	</body>
</html>
<?php }
}

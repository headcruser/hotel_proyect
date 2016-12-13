<?php
/* Smarty version 3.1.30, created on 2016-12-13 10:35:14
  from "C:\xampp\htdocs\hotel_proyect\templates\login_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584fc0d28e8096_16127471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106dcd366717f87d9da40402fd7061ae1009c9c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\login_form.html',
      1 => 1481621697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/estilos.html' => 1,
    'file:componentes/footer.html' => 1,
    'file:componentes/js.html' => 1,
  ),
),false)) {
function content_584fc0d28e8096_16127471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png">
      <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/main.css" >
      <link rel="stylesheet" type="text/css" href="../css/login.css" >
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>
<body>


    <div id="wrapper">
      <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

      <?php }?>


     <div id="contenedor">

          <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
          <div class="media">
            <div class="alert alert-danger" role="alert">
            <strong> ERROR:</strong>
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

            </div>
          </div>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
          <div class="media">
            <div class="alert alert-success" role="alert">
            <strong> Perfecto ¡¡:</strong>
            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

            </div>
          </div>
          <?php }?>


          <div class="container well" id="sha">

              <!-- Avatar -->
              <div class="row">
                  <div class="col-xs-12">
                    <img src="../img/avatar.png" class="img-responsive" id="avatar">
                  </div>
              </div>

              <?php if (isset($_smarty_tpl->tpl_vars['titulo']->value)) {?>
                  <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                  <?php } else { ?>
                  <h1 class="titulo">Hotel Dumort</h1>
                <?php }?>

                <!-- Formulario login -->
                  <form class="login" method="POST" action="login.php?accion=login">

                      <!-- Email -->
                      <div class="form-group">
                      <input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" minlength="3" required>
                      </div>

                        <!-- Boton  -->
                      <div class="form-group">
                        <div class="enviar">
                                <p> <input class="btn btn-lg btn-primary btn-block" type="submit" value="INGRESAR"></p>
                        </div>
                      </div>

                      <!-- Olvidaste tu contraseña -->
                      <div class="checkbox">
                          <p class="help-block"><a href="forgot.php">¿Olvidaste tu contraseña </a></p>
                      </div>
                </form>
          </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
        <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}

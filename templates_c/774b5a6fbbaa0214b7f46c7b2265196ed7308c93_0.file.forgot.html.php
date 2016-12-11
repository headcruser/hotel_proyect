<?php
/* Smarty version 3.1.30, created on 2016-12-07 06:53:02
  from "C:\xampp\htdocs\hotel_proyect\templates\forgot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847a3be116230_24052616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '774b5a6fbbaa0214b7f46c7b2265196ed7308c93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\forgot.html',
      1 => 1481089826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/footer.html' => 1,
  ),
),false)) {
function content_5847a3be116230_24052616 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png">
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="../css/login.css" >
      <link rel="stylesheet" type="text/css" href="../css/flat.css" >
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
      <link rel="stylesheet" type="text/css" href="../css/main.css" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div id="wrapper">

    <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <?php }?>


  <div class="container well" id="sha" >

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Recuperacion de contraseña</h3>
          </div>
       </div>

      <form class="login" method="POST" action="forgot.php?accion=validar">

        <?php if (isset($_smarty_tpl->tpl_vars['valido']->value)) {?>

          <div class="media">
              <div class="panel panel-success" role="alert">
                  <strong> El correo electronico ha sido verificado </strong>
                    <?php echo $_smarty_tpl->tpl_vars['valido']->value;?>

              </div>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
                <a href="login.php"> <strong> Volver </strong></a>
            </div>
          </div>
       <?php } else { ?>

        <div class="form-group">
            <input type="email" class="form-control" name="correo" placeholder="Correo Electronico"  required autofocus >
       </div>

        <div class="form-group">
              <div class="enviar">
                  <p> <input class="btn btn-primary btn-lg active" type="submit"  name="recuperar"></p>
              </div>
        </div>

       <?php }?>
      </form>

      <?php if (isset($_smarty_tpl->tpl_vars['invalido']->value)) {?>
        <div class="media">
            <div class="alert alert-danger" role="alert">
            <strong> ATENCION:</strong>
            <?php echo $_smarty_tpl->tpl_vars['invalido']->value;?>

            </div>
        </div>
      <?php }?>
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-12-13 10:37:25
  from "C:\xampp\htdocs\hotel_proyect\templates\perfil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584fc1557a0678_44331751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d655555e80593223e9c3ea5951a20e527224bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\perfil.html',
      1 => 1481621834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/footer.html' => 1,
  ),
),false)) {
function content_584fc1557a0678_44331751 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="shortcut icon" href="../img/iconHotel.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/main.css" >
    <link rel="stylesheet" type="text/css" href="../css/perfil_usuario.css" >
  </head>
  <body>
    <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



    <!--CONTENEDOR PRINIPAL  -->
    <div class="ibody">

      <div class="jumbotron">
          <h1 class="titulo"> Perfil de Usuario
          </h1>

      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <?php if (isset($_smarty_tpl->tpl_vars['flag']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['flag']->value == "true") {?>
                <p> <img class="img-responsive img-thumbnail" src="mifoto.php" height="200" alt="200" > </p>
                <?php } else { ?>
                <p> <img class="img-responsive img-thumbnail" src="../img/avatar.png" height="200" alt="200" > </p>
              <?php }?>
              <?php } else { ?>
                <p> <img class="img-responsive img-thumbnail" src="../img/avatar.png" height="200" alt="200" > </p>
            <?php }?>
        </div>
      </div>


      <form class="form-horizontal" action="perfil.php?accion=guardar" method="post" enctype="multipart/form-data">
          <!-- DATOS -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="nombres" placeholder="Escribe tu Nombre" required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
"<?php }?> >
            </div>
          </div>

          <!-- APELLIDO -->
          <div class="form-group">
            <div class="col-sm-12">
                <input class="form-control" type="text" name="apellidos" placeholder="Escribe tu apellido" required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
"<?php }?>>
            </div>
          </div>

          <!-- FECHA DE NACIMIENTO -->
          <div class="form-group">
            <div class="col-sm-12">
              <input class="form-control" type="date" name="nacimiento"  required <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nacimiento'];?>
"<?php }?>>
            </div>
          </div>


          <!-- CONTRASENA -->
            <div class="form-group">
              <div class="col-sm-12">
                  <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"  minlength="3"  >
              </div>
            </div>

            <!-- SUBIR FOTO -->

            <div class="form-group">
              <label for="inputEmail3" class="control-label">Seleccionar Archivo</label>
                <div class="col-sm-12">
                  <input id="input-1" class="file" type="file" name="foto" value="">
                </div>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
            <div class="media">
              <div class="alert alert-danger" role="alert">
              <strong> ERROR:</strong>
              <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

              </div>
            </div>
            <?php }?>

            <div class="form-group">
                 <div class="enviar">
                     <p> <input class="btn btn-primary btn-lg btn-block" type="submit" value="Enviar"></p>
                </div>
            </div>

      </form>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>
    <!-- CODIGO JAVASCRIPT -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}

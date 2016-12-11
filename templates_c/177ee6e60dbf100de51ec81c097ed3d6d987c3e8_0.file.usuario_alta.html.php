<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:21:03
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\usuario_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a4d4f6f0f23_26145784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '177ee6e60dbf100de51ec81c097ed3d6d987c3e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\usuario_alta.html',
      1 => 1481264460,
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
function content_584a4d4f6f0f23_26145784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>

   <meta charset="utf-8">
   <!-- Pone un icono en la pestaña -->
   <link rel="shortcut icon" href="../img/iconHotel.png">

   <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <title>FORMULARIO USUARIO</title>
  </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
                  <h1>EDICION DE USUARIO</h1>
                  <?php } else { ?>
                  <h1>NUEVO USUARIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1>Formulario Usuario </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="usuario.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">EMAIL</label>
                      <div class="col-sm-10">
                          <input type="email" class="form-control" placeholder="Escribe un Email" required name="email" <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"<?php }?> >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">CONTRASEÑA</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control" data-minlength="3"  id="inputPassword" placeholder="Escribe una contraseña" required name="contrasena" >
                      </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
                        <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
"> <?php }?>

                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="Añadir"></p>
                      </div>
                    </div>
                </form>
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

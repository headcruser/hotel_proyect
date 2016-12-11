<?php
/* Smarty version 3.1.30, created on 2016-12-10 23:52:18
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\usuario_rol_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584c8722831e79_71307949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15887bd66db0ba374f7eca2516d8883eaf59639c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\usuario_rol_form.html',
      1 => 1481410203,
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
function content_584c8722831e79_71307949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <!-- Pone un icono en la pestaña -->
      <link rel="shortcut icon" href="../img/iconHotel.png">

      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO USUARIO-ROL</title>
  </head>
  <body>

        <!-- contenedor principal -->
        <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                  <h1>EDICION DE ASIGNACION DE ROLES</h1>
                  <?php } else { ?>
                  <h1>NUEVA ASIGNACION DE ROLES</h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">

            <h1>FORMULARIO USUARIO-ROL </h1>


                <form class="form-horizontal" method="POST" action="usuario_rol.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE USUARIO</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_usuario']->value;?>

                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE ROL</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_rol']->value;?>

                      </div>
                    </div>

                  <?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                      <input type="hidden" name="nee1" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
                      <input type="hidden" name="nee2" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
">
                    <?php }?>


                   <div class="form-group">
                        <div class="enviar">
                            <p> <input class=button type="submit" value="Añadir"></p>
                      </div>></p>
                        </div>
                    </div>

                </form>
                <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

        </div>

    <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}

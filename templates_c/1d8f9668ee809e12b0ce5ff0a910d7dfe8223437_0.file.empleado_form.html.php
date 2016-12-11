<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:57:25
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\empleado_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a55d5c0aec0_73693254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8f9668ee809e12b0ce5ff0a910d7dfe8223437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\empleado_form.html',
      1 => 1481266635,
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
function content_584a55d5c0aec0_73693254 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO EMPLEADO</title>
  </head>

  <body>
        <div id="wrapper">
          <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_empleado']->value)) {?>
                  <h1>EDICION DE EMPLEADO</h1>
                  <?php } else { ?>
                  <h1>NUEVO EMPLEADO</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario empleado </h1>


                <form class="form-horizontal" method="POST" action="admEmpleado.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_empleado']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Nombre</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Nombre del empleado" required name="nombre" <?php if (isset($_smarty_tpl->tpl_vars['id_empleado']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['empleados']->value['nombre'];?>
"<?php }?>/>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Direccion</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Direccion del empleado" required name="direccion" <?php if (isset($_smarty_tpl->tpl_vars['id_empleado']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['empleados']->value['direccion'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Selecciona un usuario</label>
                        <div class="col-sm-10">
                          <?php echo $_smarty_tpl->tpl_vars['comboUsuario']->value;?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Estado Empleado</label>
                        <div class="col-sm-10">


                         <?php echo $_smarty_tpl->tpl_vars['comboEstado']->value;?>

                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_empleado']->value)) {?>
                    <input type="hidden" name="id_empleado" value="<?php echo $_smarty_tpl->tpl_vars['id_empleado']->value;?>
">
                  <?php }?>


                  <div class="enviar">
                    <p> <input class=button type="submit"></p>
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

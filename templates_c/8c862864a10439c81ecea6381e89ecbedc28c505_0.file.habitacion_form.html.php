<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:26:55
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\habitacion_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5cbf17a383_12937278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c862864a10439c81ecea6381e89ecbedc28c505' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\habitacion_form.html',
      1 => 1481268407,
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
function content_584a5cbf17a383_12937278 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO HABITACION </title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?>
                  <h1>EDICION DE HABITACION</h1>
                  <?php } else { ?>
                  <h1>NUEVA HABITACION</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario Habitacion </h1>


                <form class="form-horizontal" method="POST" action="admHabitacion.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Numero</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Asigna un número de habitación" required name="numero" <?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['habitacion']->value['numero'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Piso</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" name="piso" placeholder="Agrega número de piso" required <?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['habitacion']->value['piso'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Precio Diario</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" name="precioDiario"placeholder="Agrega el costo diario" required  <?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['habitacion']->value['precioDiario'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Selecciona estado</label>
                        <div class="col-sm-10">
                        <?php echo $_smarty_tpl->tpl_vars['comboEstado']->value;?>

                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Selecciona Tipo de Habitacion</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboHabitacion']->value;?>

                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?>
                    <input type="hidden" name="id_habitacion" value="<?php echo $_smarty_tpl->tpl_vars['id_habitacion']->value;?>
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

<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:21:27
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\tipoHabitacion_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5b77c9a4b4_30222536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '649ea217c768385bc135a0c8f2c9d22f75c1effb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\tipoHabitacion_form.html',
      1 => 1481268049,
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
function content_584a5b77c9a4b4_30222536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--ALTA DE tipoComprobanteS/HOTEL DUMORT-->

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO TIPO HABITACION</title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_tipoHab']->value)) {?>
                  <h1>EDICION DE tipoComprobante</h1>
                  <?php } else { ?>
                  <h1>NUEVO tipoComprobante</h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">
                <h1>Formulario tipo habitacion </h1>


                <form class="form-horizontal" method="POST" action="admTipoHabitacion.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_tipoHab']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Descripcion de Habitacion</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Agrega la descripcion de la habitación" required name="descripcion" <?php if (isset($_smarty_tpl->tpl_vars['id_tipoHab']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['tipoHabitacion']->value['descripcion'];?>
"<?php }?>/>
                        </div>
                    </div>


                   <?php if (isset($_smarty_tpl->tpl_vars['id_tipoHab']->value)) {?>
                    <input type="hidden" name="id_tipoHab" value="<?php echo $_smarty_tpl->tpl_vars['id_tipoHab']->value;?>
">
                  <?php }?>


                  <div class="enviar">
                    <p> <input class=button type="submit" value="añadir"></p>
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

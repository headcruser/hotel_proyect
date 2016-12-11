<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:16:48
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\reserva_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5a60348953_22266929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1441fe8f828ea6e1a70426a46d7842a2c87dc5c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\reserva_form.html',
      1 => 1481267799,
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
function content_584a5a60348953_22266929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
          <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO RESERVA</title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_reserva']->value)) {?>
                  <h1>EDICION DE RESERVA</h1>
                  <?php } else { ?>
                  <h1>NUEVA RESERVA</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario reserva </h1>


                <form class="form-horizontal" method="POST" action="admReserva.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_reserva']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Fecha Reserva</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="date" required name="fechaReserva" <?php if (isset($_smarty_tpl->tpl_vars['id_reserva']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['reserva']->value['fechaReserva'];?>
"<?php }?>/>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Costo de alojamiento</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Asigna un costo" required name="costoAlojamiento" <?php if (isset($_smarty_tpl->tpl_vars['id_reserva']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['reserva']->value['costoAlojamiento'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Seleccione habitacion</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboHabitacion']->value;?>

                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Seleccione tipo Reserva</label>
                        <div class="col-sm-10">

                        <?php echo $_smarty_tpl->tpl_vars['comboReserva']->value;?>


                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> seleccione Empleado</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboEmpleado']->value;?>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Asignar a un cliente</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboCliente']->value;?>

                        </div>
                    </div>


                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> seleccione Estado</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboEstado']->value;?>

                        </div>
                    </div>


                   <?php if (isset($_smarty_tpl->tpl_vars['id_reserva']->value)) {?>
                    <input type="hidden" name="id_reserva" value="<?php echo $_smarty_tpl->tpl_vars['id_reserva']->value;?>
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

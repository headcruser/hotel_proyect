<?php
/* Smarty version 3.1.30, created on 2016-12-12 04:38:17
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\consumo_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e1ba92b1e71_51131688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd47d89d104d9cbba5ac7c29e46fa7818105c3eb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\consumo_form.html',
      1 => 1481266505,
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
function content_584e1ba92b1e71_51131688 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO CONSUMO </title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_consumo']->value)) {?>
                  <h1>EDICION DE CONSUMO</h1>
                  <?php } else { ?>
                  <h1>NUEVO CONSUMO</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario Habitacion </h1>


                <form class="form-horizontal" method="POST" action="admConsumo.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_consumo']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Seleccione Reservacion</label>
                        <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['comboReserva']->value;?>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Seleccione Producto</label>
                        <div class="col-sm-10">

                        <?php echo $_smarty_tpl->tpl_vars['comboProducto']->value;?>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Cantidad</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Cantidad del consumo" required name="cantidad" <?php if (isset($_smarty_tpl->tpl_vars['id_consumo']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['consumos']->value['cantidad'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Precio de venta</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" name="precioVenta" placeholder="Asigna un precio de venta" required <?php if (isset($_smarty_tpl->tpl_vars['id_consumo']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['consumos']->value['precioVenta'];?>
"<?php }?>/>
                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_consumo']->value)) {?>
                    <input type="hidden" name="id_consumo" value="<?php echo $_smarty_tpl->tpl_vars['id_consumo']->value;?>
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

<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:04:14
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\pago_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a576e1a9a21_20897611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9c28e082465eb0e5b75d6616b0ade96b127d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\pago_form.html',
      1 => 1481267049,
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
function content_584a576e1a9a21_20897611 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO DE PAGOS </title>
  </head>
  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?>
                  <h1>EDICION DE PAGO</h1>
                  <?php } else { ?>
                  <h1>NUEVO REGISTRO PAGO</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario de pagos </h1>


                <form class="form-horizontal" method="POST" action="admPago.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Seleccona reserva</label>
                        <div class="col-sm-10">

                        <?php echo $_smarty_tpl->tpl_vars['comboReserva']->value;?>


                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Seleciona producto</label>
                        <div class="col-sm-10">

                          <?php echo $_smarty_tpl->tpl_vars['comboProducto']->value;?>


                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Selecciona Comprobante</label>
                        <div class="col-sm-10">

                        <?php echo $_smarty_tpl->tpl_vars['comboComprobante']->value;?>


                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Iva</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" name="iva"  placeholder="Asigna precio de iva" required <?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['pago']->value['iva'];?>
"<?php }?>/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Fecha Emision </label>
                        <div class="col-sm-10">
                         <input class="form-control" type="date" name="fechaEmision" required <?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['pago']->value['fechaEmision'];?>
"<?php }?>/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Fecha Pago </label>
                        <div class="col-sm-10">
                         <input class="form-control" type="date" name="fechaPago" required <?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['pago']->value['fechaPago'];?>
"<?php }?>/>
                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_pago']->value)) {?>
                    <input type="hidden" name="id_pago" value="<?php echo $_smarty_tpl->tpl_vars['id_pago']->value;?>
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

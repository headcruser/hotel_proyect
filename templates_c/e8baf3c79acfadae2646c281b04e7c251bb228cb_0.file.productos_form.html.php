<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:13:38
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\productos_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a59a2a318f2_61488204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8baf3c79acfadae2646c281b04e7c251bb228cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\productos_form.html',
      1 => 1481267606,
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
function content_584a59a2a318f2_61488204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--TEMPLATES/HOTEL DUMORT-->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/flat.css" >
    <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <title>FORMULARIO PRODUCTO</title>
</head>

  <body>
        <div id="wrapper">
          <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?>
                  <h1>EDICION DE PRODUCTO</h1>
                  <?php } else { ?>
                  <h1>NUEVO PRODUCTO</h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">
            <h1>Formulario Producto </h1>

                <form  class="form-horizontal" method="POST" action="admProducto.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"> Nombre</label>
                      <div class="col-sm-10">
                       <input class="form-control" type="text" placeholder="Nombre del producto" required name="nombre" <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
"<?php }?>/>
                      </div>
                  </div>


                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"> Descripcion</label>
                      <div class="col-sm-10">
                       <input class="form-control" type="textArea" placeholder="Agrega una descripcion" required name="descripcion" <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
"<?php }?>/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"> Unidad de medida</label>
                      <div class="col-sm-10">
                       <input class="form-control" type="text" name="unidadMedida"  placeholder="Unidad de medida" required <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['unidadMedida'];?>
"<?php }?>/><br>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"> Precio Venta</label>
                      <div class="col-sm-10">
                       <input class="form-control" type="text" name="precioVenta" placeholder="Precio de venta" required <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['precioVenta'];?>
"<?php }?>/>
                      </div>
                  </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['idProducto']->value)) {?>
                    <input type="hidden" name="idProducto" value="<?php echo $_smarty_tpl->tpl_vars['idProducto']->value;?>
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

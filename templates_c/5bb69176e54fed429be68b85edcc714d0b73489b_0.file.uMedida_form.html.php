<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:24:03
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\uMedida_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5c134f55d6_91331159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb69176e54fed429be68b85edcc714d0b73489b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\uMedida_form.html',
      1 => 1481268238,
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
function content_584a5c134f55d6_91331159 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO TIPO UNIDAD DE MEDIDA</title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_uMedida']->value)) {?>
                  <h1>EDICION DE TIPO DE UNIDAD DE MEDIDA</h1>
                  <?php } else { ?>
                  <h1>NUEVA UNIDAD DE MEDIDA </h1>
                <?php }?>
                <br>
          </div>

            <div class="formulario">
                <h1>Formulario tipo Unidad de medida</h1>

                <form class="form-horizontal" method="POST" action="admuMedida.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_uMedida']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> Descripcion </label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Agrega una descripcion" required name="descripcion" <?php if (isset($_smarty_tpl->tpl_vars['id_uMedida']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['umedida']->value['descripcion'];?>
"<?php }?>/>
                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_uMedida']->value)) {?>
                    <input type="hidden" name="id_uMedida" value="<?php echo $_smarty_tpl->tpl_vars['id_uMedida']->value;?>
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

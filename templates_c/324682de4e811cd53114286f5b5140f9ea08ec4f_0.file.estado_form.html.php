<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:00:37
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\estado_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5695811060_14773155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '324682de4e811cd53114286f5b5140f9ea08ec4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\estado_form.html',
      1 => 1481266831,
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
function content_584a5695811060_14773155 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO ESTADOS DE REFERENCIA</title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>
                  <h1>EDICION DE TIPO DE ESTADO</h1>
                  <?php } else { ?>
                  <h1>NUEVA UNIDAD DE ESTADO </h1>
                <?php }?>
                <br>
            </div>

            <div class="formulario">
                <h1>Formulario Para Estados </h1>


                <form class="form-horizontal" method="POST" action="admEstado.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>guardar<?php } else { ?>alta<?php }?>">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label"> ESTADO </label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" placeholder="Escribe un nuevo estado " required name="descripcion" <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['estado']->value['descripcion'];?>
"<?php }?>/>
                        </div>
                    </div>


                   <?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>
                    <input type="hidden" name="id_estado" value="<?php echo $_smarty_tpl->tpl_vars['id_estado']->value;?>
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

<?php
/* Smarty version 3.1.30, created on 2016-12-11 02:07:25
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\privilegio_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584ca6cd644ce2_44717736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598ed29dbbdb8f4706da2e154c1c6f97d909ef1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\privilegio_alta.html',
      1 => 1481264831,
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
function content_584ca6cd644ce2_44717736 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png">

    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <title>FORMULARIO PRIVILEGIO</title>
  </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                  <h1>EDICION DE PRIVILEGIO</h1>
                  <?php } else { ?>
                  <h1>NUEVO PRIVILEGIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario" >
              <h1>Formulario privilegio </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="privilegio.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>guardar<?php } else { ?>alta<?php }?>" id="form">

                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">PRIVILEGIO</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Escribe un privilegio" required name="privilegio" <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['privilegio']->value['privilegio'];?>
"<?php }?>  required>
                      </div>
                    </div>


                    <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                        <input type="hidden" name="id_privilegio" value="<?php echo $_smarty_tpl->tpl_vars['id_privilegio']->value;?>
"> <?php }?>

                    <div class="form-group">
                      <div class="enviar">
                              <p> <input class=button type="submit" value="Añadir"></p>
                      </div>
                    </div>
                </form>
            </div>
              <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
         <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 src="../../js/jquery.validate"><?php echo '</script'; ?>
>

          <?php echo '<script'; ?>
>
            $("#form").validate();
          <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-12-11 17:10:48
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\rol_privilegio_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584d7a882df1d9_60221254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ffd535c8c0c0de18d276b0b5cac2934600bf56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\rol_privilegio_alta.html',
      1 => 1481472605,
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
function content_584d7a882df1d9_60221254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>

      <meta charset="utf-8">
      <!-- Pone un icono en la pestaña -->
      <link rel="shortcut icon" href="../img/iconHotel.png">

      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO ROL_PRIVILEGIO</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>
                  <h1>EDICION DE PRIVILEGIOS</h1>
                  <?php } else { ?>
                  <h1>NUEVO ROL-PRIVILEGIO</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1>FORMULARIO ROL-PRIVILEGIO </h1>

                <form class="form-horizontal" method="POST" action="rol_privilegio.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE ROL</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_rol']->value;?>

                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">SELECCION DE PRIVILEGIO</label>
                      <div class="col-sm-10">
                         <?php echo $_smarty_tpl->tpl_vars['combo_privilegio']->value;?>

                      </div>
                    </div>


                    <?php if (isset($_smarty_tpl->tpl_vars['id_privilegio']->value) && isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                    <input type="hidden" name="nee1" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
">
                    <input type="hidden" name="nee2" value="<?php echo $_smarty_tpl->tpl_vars['id_privilegio']->value;?>
">

                   <?php }?>

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

</body>
</html>
<?php }
}

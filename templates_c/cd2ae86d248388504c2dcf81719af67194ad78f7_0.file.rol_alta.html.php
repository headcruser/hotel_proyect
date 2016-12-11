<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:26:03
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\rol_alta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a4e7b6742d6_47767686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd2ae86d248388504c2dcf81719af67194ad78f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\rol_alta.html',
      1 => 1481264756,
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
function content_584a4e7b6742d6_47767686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png">

    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <title>Rol-Alta</title>
    </head>
  <body>

      <!-- contenedor principal -->
      <div id="wrapper">
         <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                  <h1>EDICION DE ROL</h1>
                  <?php } else { ?>
                  <h1>NUEVO ROL</h1>
                <?php }?>
                <br>
          </div>

          <div class="formulario ">
              <h1>Formulario ROL </h1>

                <form class="form-horizontal" method="POST" data-toggle="validator" role="form" action="rol.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>guardar<?php } else { ?>alta<?php }?>" id="form">

                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">ROL</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Escribe un Rol" required name="rol" <?php if (isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['rol'];?>
"<?php }?> >
                      </div>
                    </div>


                    <?php if (isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
                        <input type="hidden" name="id_rol" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
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
 src="../js/jquery.validate"><?php echo '</script'; ?>
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

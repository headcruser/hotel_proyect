<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:51:11
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\clientes_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a545f2bacd7_93638085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e1bcc5d49ba64c5680d0cddc9642ca36161740' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\clientes_form.html',
      1 => 1481266262,
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
function content_584a545f2bacd7_93638085 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--ALTA DE CLIENTES/HOTEL DUMORT-->
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->

      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>FORMULARIO CLIENTE</title>
  </head>

  <body>
        <div id="wrapper">
            <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

          <div id="Encabezado">
             

                <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>
                  <h1>EDICION DE CLIENTE</h1>
                  <?php } else { ?>
                  <h1>NUEVO CLIENTE</h1>
                <?php }?>
                <br>
            </div>



            <div class="formulario">
                <h1>Formulario cliente </h1>


                <form class="form-horizontal" method="POST" action="admClientes.php?accion=<?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>guardar<?php } else { ?>alta<?php }?>">


                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> Nombre</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" id="inputName" placeholder="Escribe tu nombre" required  name="nombre" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> RFC</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" id="inputName" placeholder="Escribe tu RFC" required minlength="13" name="rfc" <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['rfc'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> Direccion</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" name="direccion" id="inputName" placeholder="Escribe tu dirección" required <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['direccion'];?>
"<?php }?>/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> Telefono</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="tel" name="telefono" id="inputName" placeholder="Escribe tu Telefono" required <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
"<?php }?>/>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> Email</label>
                        <div class="col-sm-10">
                         <input class="form-control" type="text" name="email" id="inputName" placeholder="Escribe un correo Électronico" required <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
"<?php }?>/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label"> Selecciona un usuario</label>
                        <div class="col-sm-10">
                          <?php echo $_smarty_tpl->tpl_vars['comboUsuario']->value;?>

                        </div>
                    </div>

                   <?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>
                    <input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['id_cliente']->value;?>
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

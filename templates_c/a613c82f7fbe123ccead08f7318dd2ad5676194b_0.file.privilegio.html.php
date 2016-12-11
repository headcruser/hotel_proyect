<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:26:26
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\privilegio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a4e92813c45_49582776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a613c82f7fbe123ccead08f7318dd2ad5676194b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\privilegio.html',
      1 => 1481086553,
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
function content_584a4e92813c45_49582776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de los privilegios -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png"> 
    
     <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>
<body>

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

      
      <div id="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >ID_PRIVILEGIO </th>
                  <th>PRIVILEGIO</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['privilegio']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['privilegio'];?>
</td>
                  <td> <img src="../img/report.png" ></td>
                  <td>
                    <a href="privilegio.php?accion=editar&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
">
                      <img src="../img/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="privilegio.php?accion=eliminar&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
">
                      <img src="../img/cancel.png" >
                    </a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

                <div class="alta">
                  <form >
                      <!--<input class=button type=submit value="alta" name="accion">-->
                      <a  class=button href="privilegio.php?accion=nuevo">NUEVO PRIVILEGIO</a>
                  </form>
                </div>
            </div>
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

     <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

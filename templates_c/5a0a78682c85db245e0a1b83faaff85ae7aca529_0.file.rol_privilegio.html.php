<?php
/* Smarty version 3.1.30, created on 2016-12-07 05:59:31
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\rol_privilegio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847973349b987_99563263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a0a78682c85db245e0a1b83faaff85ae7aca529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\rol_privilegio.html',
      1 => 1481086627,
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
function content_5847973349b987_99563263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de rol-privilegio -->
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <!-- Pone un icono en la pestaña -->
      <link rel="shortcut icon" href="../img/iconHotel.png">

      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>Rol-Privilegio</title>
  </head>
<body>

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



      <div id="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                <!--MUESTRA LA TABLA DE -->
              <table class="table-condensed"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >ROL </th>
                  <th>PRIVILEGIO</th>
                  <th>VER</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rol']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['rol'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['privilegio'];?>
</td>

                  <td> <img src="../img/report.png" ></td>
                  <td>
                    <a href="rol_privilegio.php?accion=editar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
">
                      <img src="../img/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="rol_privilegio.php?accion=eliminar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
&id_privilegio=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_privilegio'];?>
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
                      <a  class=button href="rol_privilegio.php?accion=nuevo">Nueva Asignación</a>
                  </form>
                </div>
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

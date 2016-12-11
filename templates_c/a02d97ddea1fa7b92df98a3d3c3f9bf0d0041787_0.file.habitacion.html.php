<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:26:53
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\habitacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5cbd3787f4_48731053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a02d97ddea1fa7b92df98a3d3c3f9bf0d0041787' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\habitacion.html',
      1 => 1481268328,
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
function content_584a5cbd3787f4_48731053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- vista de las habitaciones -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/iconHotel.png"> <!-- Pone un icono en la pestaña -->
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <title>FORMULARIO HABITACION </title>
</head>

<body>
  <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <div class="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

      <!--MUESTRA LA TABLA DE HABITACIONES -->
        <table class="table" CELLSPACING=1 >

          <tr ALIGN=center>
            <th>Numero </th>
            <th>Piso</th>
            <th>Precio Diario</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['habitaciones']->value, 'habitacion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['habitacion']->value) {
?>
          <tr ALIGN=center>
            <td><?php echo $_smarty_tpl->tpl_vars['habitacion']->value['numero'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['habitacion']->value['piso'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['habitacion']->value['precioDiario'];?>
</td>
            <td> <img src="../img/report.png" ></td>
            <td>
              <a href="admHabitacion.php?accion=editar&id_habitacion=<?php echo $_smarty_tpl->tpl_vars['habitacion']->value['id_habitacion'];?>
">
                <img src="../img/lapiz.png" >
            </td>
              </a>
            <td>
              <a  href="admHabitacion.php?accion=eliminar&id_habitacion=<?php echo $_smarty_tpl->tpl_vars['habitacion']->value['id_habitacion'];?>
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
                <a  class=button href="admHabitacion.php?accion=nuevo">NUEVA HABITACION</a>
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

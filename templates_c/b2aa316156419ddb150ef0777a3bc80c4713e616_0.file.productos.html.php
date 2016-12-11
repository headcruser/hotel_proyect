<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:13:10
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\productos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5986e21552_62952502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2aa316156419ddb150ef0777a3bc80c4713e616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\productos.html',
      1 => 1481267195,
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
function content_584a5986e21552_62952502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de los productos  -->
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../img/iconHotel.png">
      <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <title>Productos</title>
  </head>
<body>
  <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


    <div class="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
      <!--MUESTRA LA TABLA DE CLIENTESS -->
        <table  class="table" CELLSPACING=1 >

          <tr ALIGN=center>
            <th>Nombre </th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Unidad de Medida</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
          <tr ALIGN=center>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value['Medida'];?>
</td>
            <td> <img src="../img/report.png" ></td>
            <td>
              <a href="admProducto.php?accion=editar&idProducto=<?php echo $_smarty_tpl->tpl_vars['producto']->value['idProducto'];?>
">
                <img src="../img/lapiz.png" >
            </td>
              </a>
            <td>
              <a  href="admProducto.php?accion=eliminar&idProducto=<?php echo $_smarty_tpl->tpl_vars['producto']->value['idProducto'];?>
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
            <form>
                <a  class=button href="admProducto.php?accion=nuevo">NUEVO PRODUCTO</a>
            </form>
          </div>
          <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
<?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
</html>
<?php }
}

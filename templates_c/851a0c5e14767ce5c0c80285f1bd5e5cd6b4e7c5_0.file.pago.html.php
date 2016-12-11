<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:01:55
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\pago.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a56e35767f3_62790142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851a0c5e14767ce5c0c80285f1bd5e5cd6b4e7c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\pago.html',
      1 => 1481266905,
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
function content_584a56e35767f3_62790142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- vista de pagos del sistema -->
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

    <div class="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

      <!--MUESTRA LA TABLA DE HABITACIONES -->
        <table class="table" CELLSPACING=1 >

          <tr ALIGN=center>
            <th>Iva </th>
            <th>Fecha de emision</th>
            <th>Fecha de pago</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagos']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
          <tr ALIGN=center>
            <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['iva'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['fechaEmision'];?>
</td>
            <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['fechaPago'];?>
</td>
            <td> <img src="../img/report.png" ></td>
            <td>
              <a href="admPago.php?accion=editar&id_pago=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_pago'];?>
">
                <img src="../img/lapiz.png" >
            </td>
              </a>
            <td>
              <a  href="admPago.php?accion=eliminar&id_pago=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_pago'];?>
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
                <a class=button href="admPago.php?accion=nuevo">REGISTRAR PAGO</a>
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

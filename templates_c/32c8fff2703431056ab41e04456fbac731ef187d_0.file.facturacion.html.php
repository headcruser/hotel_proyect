<?php
/* Smarty version 3.1.30, created on 2016-12-07 08:05:16
  from "C:\xampp\htdocs\hotel_proyect\templates\facturacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847b4ac843690_29121314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c8fff2703431056ab41e04456fbac731ef187d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\facturacion.html',
      1 => 1481094313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:componentes/footer.html' => 1,
    'file:componentes/js.html' => 1,
  ),
),false)) {
function content_5847b4ac843690_29121314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png">

      <!--hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="../css/main.css" >
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >

    <title>cotizacion</title>
  </head>
<body>

    <div id="wrapper">
      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>



      <div id="contenedor">
      <h1>Lista de reportes Eléctronicos</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >Nombre </th>
                  <th> RFC</th>
                  <th> EMAIL</th>
                  <th>PDF</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['nombre'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['rfc'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['email'];?>
</td>
                  <td>
                    <a  href="facturacion.php?accion=imprimir&id_cliente=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_cliente'];?>
">
                      <img src="../img/pdf.png" >
                    </a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>


            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- CODIGO JAVASCRIPT -->
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}

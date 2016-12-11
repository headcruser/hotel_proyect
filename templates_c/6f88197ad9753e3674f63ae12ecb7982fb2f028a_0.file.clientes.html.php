<?php
/* Smarty version 3.1.30, created on 2016-12-04 18:57:43
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\clientes.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58445917de13d9_01628167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f88197ad9753e3674f63ae12ecb7982fb2f028a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\clientes.html',
      1 => 1480872675,
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
function content_58445917de13d9_01628167 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- vista de clientes del hotel -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png">

    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Hoja de estilos -->


    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  </head>

  <!-- Body -->
  <body>

  <!-- Contenedor principal -->
  <div id="wrapper">
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


    <div id="contenedor">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

       <!--MUESTRA LA TABLA DE CLIENTESS -->
            <table class="table" CELLSPACING=1 >

              <tr ALIGN=center>
                <th>Nombre</th>
                <th>Rfc</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
?>
              <tr ALIGN=center>
                <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['rfc'];?>
</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['direccion'];?>
</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
</td>
                <td> <img src="../img/report.png" ></td>
                <td>
                  <a href="admclientes.php?accion=editar&id_cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_cliente'];?>
">
                    <img src="../img/lapiz.png" >
                </td>
                  </a>
                <td>
                  <a  href="admClientes.php?accion=eliminar&id_cliente=<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id_cliente'];?>
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
            <a  class=button href="admClientes.php?accion=nuevo">NUEVO CLIENTE</a>
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

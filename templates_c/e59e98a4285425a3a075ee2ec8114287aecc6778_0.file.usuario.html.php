<?php
/* Smarty version 3.1.30, created on 2016-12-09 07:18:27
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\usuario.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a4cb3758db1_36692949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59e98a4285425a3a075ee2ec8114287aecc6778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\usuario.html',
      1 => 1481264185,
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
function content_584a4cb3758db1_36692949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de los usuarios  -->
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
                  <th >id Usuario </th>
                  <th>E-mail</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['email'];?>
</td>
                  <!-- <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['contrasena'];?>
</td> -->
                  <td> <img src="../img/report.png" ></td>
                  <td>
                    <a href="usuario.php?accion=editar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
">
                      <img src="../img/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="usuario.php?accion=eliminar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
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

                  <!-- Inserta un nuevo elemento -->
                <div class="alta">
                  <form >
                      <a  class=button href="usuario.php?accion=nuevo">Nuevo usuario</a>
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

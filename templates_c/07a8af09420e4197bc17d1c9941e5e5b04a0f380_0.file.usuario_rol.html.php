<?php
/* Smarty version 3.1.30, created on 2016-12-07 05:59:34
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\usuario_rol.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58479736dab286_82274885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a8af09420e4197bc17d1c9941e5e5b04a0f380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\usuario_rol.html',
      1 => 1481086669,
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
function content_58479736dab286_82274885 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de usuario-rol -->
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
              <table class="table-condensed"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th >USUARIO </th>
                  <th>ROL</th>
                  <th>VER</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario_rol']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['email'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['rol'];?>
</td>
                  <td> <img src="../img/report.png" ></td>
                  <td>
                    <a href="usuario_rol.php?accion=editar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
">
                      <img src="../img/lapiz.png" >
                  </td>
                    </a>
                  <td>
                       <a href="usuario_rol.php?accion=eliminar&id_usuario=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_usuario'];?>
&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
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

            </table> <!-- fin de tabla -->

                <div class="alta">
                  <form >
                      <a  class=button href="usuario_rol.php?accion=nuevo">Nueva asignación </a>
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

<?php
/* Smarty version 3.1.30, created on 2016-12-07 05:59:25
  from "C:\xampp\htdocs\hotel_proyect\templates\admin\rol.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847972d890a99_02221934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239fcfccb4c3ff73e3517923fba14a318bfc1ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\admin\\rol.html',
      1 => 1481086577,
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
function content_5847972d890a99_02221934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista Rol -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Pone un icono en la pestaña -->
    <link rel="shortcut icon" href="../img/iconHotel.png"> 
    
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <title>Roles disponibles</title>
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
                  <th >id Rol </th>
                  <th>Rol</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rol']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
</td>       
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['rol'];?>
</td>
                  <td> <img src="../img/report.png" ></td>
                  <td>
                    <a href="rol.php?accion=editar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
">
                      <img src="../img/lapiz.png" >
                  </td>
                    </a>
                  <td>
                    <a  href="rol.php?accion=eliminar&id_rol=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_rol'];?>
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

                  <!--INSERTA UN NUEVO CLIENTE-->

                <div class="alta">
                  <form >
                      <!--<input class=button type=submit value="alta" name="accion">-->
                      <a  class=button href="rol.php?accion=nuevo">NUEVO ROL</a>
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

<?php
/* Smarty version 3.1.30, created on 2016-12-12 04:48:42
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\empleado.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e1e1a598f42_22802565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c97affb7316c86943d5cdab0d83a4cefc1ed54d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\empleado.html',
      1 => 1481266541,
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
function content_584e1e1a598f42_22802565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Vista de empleados del sistema -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/iconHotel.png">  <!-- Pone un icono en la pestaña -->
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender("file:componentes/estilos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </head>
    <body>
            <div id="wrapper">
              <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


                  <div id="contenedor">
                    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                        <!--MUESTRA LA TABLA -->
                    <table class="table" CELLSPACING=1 >

                      <tr ALIGN=center>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Usuario</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empleados']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                      <tr ALIGN=center>
                        <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['nombre'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['direccion'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['usuario'];?>
</td>
                        <td> <img src="../img/report.png" ></td>
                        <td>
                          <a href="admEmpleado.php?accion=editar&id_empleado=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_empleado'];?>
">
                            <img src="../img/lapiz.png" >
                        </td>
                          </a>
                        <td>
                          <a  href="admEmpleado.php?accion=eliminar&id_empleado=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_empleado'];?>
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
                      <form  >
                          <a  class=button href="admEmpleado.php?accion=nuevo">NUEVO EMPLEADO</a>
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

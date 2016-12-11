<?php
/* Smarty version 3.1.30, created on 2016-12-09 08:16:45
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\reserva.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a5a5d138c46_86397338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0bdb4cce29cd9de3ac697a88dd01945ed3a5c3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\reserva.html',
      1 => 1481267651,
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
function content_584a5a5d138c46_86397338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- vista reservas -->
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
                        <th>Fecha de Reserva</th>
                        <th>Costo de Alojamiento</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservas']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                      <tr ALIGN=center>
                        <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['fechaReserva'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['costoAlojamiento'];?>
</td>
                        <td> <img src="../img/report.png" ></td>
                        <td>
                          <a href="admReserva.php?accion=editar&id_reserva=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_reserva'];?>
">
                            <img src="../img/lapiz.png" >
                        </td>
                          </a>
                        <td>
                          <a  href="admReserva.php?accion=eliminar&id_reserva=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_reserva'];?>
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
                          <a  class=button href="admReserva.php?accion=nuevo">NUEVA RESERVACION</a>
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

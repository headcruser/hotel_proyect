<?php
/* Smarty version 3.1.30, created on 2016-12-07 06:18:03
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\tipoReserva.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58479b8b229fb2_58554631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003e80a6b183788ad4b61bdde812655a4d377cde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\tipoReserva.html',
      1 => 1480873568,
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
function content_58479b8b229fb2_58554631 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

                        <!--MUESTRA LA TABLA  -->
                    <table class="table" CELLSPACING=1 >

                      <tr ALIGN=center>
                        <th>Tipo de Reserva</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipoReservas']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                      <tr ALIGN=center>
                        <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['descripcion'];?>
</td>
                        <td> <img src="../img/report.png" ></td>
                        <td>
                          <a href="admTipoReserva.php?accion=editar&id_tipoReserva=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_tipoReserva'];?>
">
                            <img src="../img/lapiz.png" >
                        </td>
                          </a>
                        <td>
                          <a  href="admTipoReserva.php?accion=eliminar&id_tipoReserva=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_tipoReserva'];?>
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
                          <a  class=button href="admTipoReserva.php?accion=nuevo">NUEVO TIPO DE RESERVA </a>
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

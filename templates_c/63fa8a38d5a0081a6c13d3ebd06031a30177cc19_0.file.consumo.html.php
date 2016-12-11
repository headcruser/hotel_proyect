<?php
/* Smarty version 3.1.30, created on 2016-12-04 18:47:12
  from "C:\xampp\htdocs\hotel_proyect\templates\contador\consumo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584456a0d4a572_75871588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63fa8a38d5a0081a6c13d3ebd06031a30177cc19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\contador\\consumo.html',
      1 => 1480872749,
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
function content_584456a0d4a572_75871588 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../img/iconHotel.png">  <!-- Pone un icono en la pestaña -->
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <!-- Hoja de estilos -->
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
                        <th>Cantidad</th>
                        <th>Precio de venta</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consumos']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                      <tr ALIGN=center>
                        <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['cantidad'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['precioVenta'];?>
</td>
                        <td> <img src="../img/report.png" ></td>
                        <td>
                          <a href="admConsumo.php?accion=editar&id_consumo=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_consumo'];?>
">
                            <img src="../img/lapiz.png" >
                        </td>
                          </a>
                        <td>
                          <a  href="admConsumo.php?accion=eliminar&id_consumo=<?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_consumo'];?>
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
                          <a  class=button href="admConsumo.php?accion=nuevo">NUEVO CONSUMO</a>
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

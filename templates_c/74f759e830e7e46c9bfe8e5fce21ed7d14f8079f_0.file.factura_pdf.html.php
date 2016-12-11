<?php
/* Smarty version 3.1.30, created on 2016-12-08 04:55:38
  from "C:\xampp\htdocs\hotel_proyect\templates\PDF\facturaClientes\factura_pdf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5848d9ba126dc2_51901118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f759e830e7e46c9bfe8e5fce21ed7d14f8079f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\PDF\\facturaClientes\\factura_pdf.html',
      1 => 1481169309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5848d9ba126dc2_51901118 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    .table
    {
      border-collapse: collapse;
      width: 100%;
      font-size:12px;
      font-family: Helvetica, Geneva, Arial, sans-serif;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      margin: 0 auto;   /**Centra la tabla en el contenedor*/
      border: 1px;
    }

    th
    {  
      text-align: center;
      background-color: #4CAF50;
      color: white;
    }

    th, td
    {
      padding: 8px;
      font-size:14px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

  </style>

<page backtop="5%" backbottom="5%" backleft="5%" backright="5%">
      <h1>Factura Electrónica</h1>

                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th  >Nombre </th>
                  <th > Apellido</th>
                  <th > Nacimiento</th>
                  <th > Direccion</th>
                  <th > Costo Alojamiento</th>
                  <th > Fecha Emision</th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['nombres'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['apellidos'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['nacimiento'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['direccion'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['costoAlojamiento'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['fechaEmision'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
</page><?php }
}

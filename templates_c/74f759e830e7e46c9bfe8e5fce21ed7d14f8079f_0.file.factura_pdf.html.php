<?php
/* Smarty version 3.1.30, created on 2016-12-12 03:25:52
  from "C:\xampp\htdocs\hotel_proyect\templates\PDF\facturaClientes\factura_pdf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e0ab0219f99_07146594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f759e830e7e46c9bfe8e5fce21ed7d14f8079f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\PDF\\facturaClientes\\factura_pdf.html',
      1 => 1481509548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584e0ab0219f99_07146594 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    .titulo
    {
      text-align: center;
    }
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
      <hr>
      <h1 class="encabezado">Factura Electrónica</h1>
      <hr>

      <br>
      <h1>Datos del Cliente</h1>
                <!--MUESTRA LA TABLA DE CLIENTESS -->
              <table class="table"  CELLSPACING=1  >

                <tr ALIGN=center>
                  <th  >Nombre cliente </th>
                  <th > Empleado</th>
                  <th > Tipo de Reservacion</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
                <tr ALIGN=center>
                  <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['nombre'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['empleado'];?>
</td>
                  <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['descripcion'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
       <br>
       <br>
       <hr>
       <h2>Consumos Realizados por el cliente </h2>

         <!--MUESTRA LA TABLA DE CLIENTESS -->
       <table class="table"  CELLSPACING=1  >

         <tr ALIGN=center>
           <th  >No. Reserva </th>
           <th > Producto</th>
           <th > Cantidad</th>
           <th > Precio de venta</th>
           <th > Subtotal</th>

         </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consumos']->value, 'elemento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
?>
         <tr ALIGN=center>
           <td><?php echo $_smarty_tpl->tpl_vars['elemento']->value['id_reserva'];?>
</td>
           <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['producto'];?>
</td>
           <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['cantidad'];?>
</td>
           <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['precioVenta'];?>
</td>
           <td> <?php echo $_smarty_tpl->tpl_vars['elemento']->value['subTotal'];?>
</td>
         </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </table>
     <br>
     <br>
     <label><span> Total de los cosumos:</span> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</label>

</page>
<?php }
}

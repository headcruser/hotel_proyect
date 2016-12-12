<?php
/* Smarty version 3.1.30, created on 2016-12-12 01:31:14
  from "C:\xampp\htdocs\hotel_proyect\templates\cliente\consumo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584defd2d4c5e9_89951097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81960a188f13668547770a7fc906a74cc4023c3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\cliente\\consumo.html',
      1 => 1481502671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../componentes/footer.html' => 1,
  ),
),false)) {
function content_584defd2d4c5e9_89951097 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <!-- Pone un icono en la pestaña -->
	    <link rel="shortcut icon" href="../image/iconHotel.png">

	    <!--hoja de estilos -->
	    <link rel="stylesheet" type="text/css" href="../css/main.css" >
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >

	    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	  </head>
	<body>

	    <div id="wrapper">
	      <?php echo $_smarty_tpl->tpl_vars['header']->value;?>


	      <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


				<div class="panel panel-primary">
					<div class="panel-heading">
						Querido y amado cliente, usted puede cargar sus consumos
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
					<h3 ><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
					<?php }?>

					<div >
							<!-- Formulario -->
							<form  class="form-horizontal"action="../cliente/consumo.php?accion=nuevo" method="POST">

								<!-- sELECCION DE SERVICIOS -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Selecciona un Producto</label>
										<div class="col-sm-4">
													<?php echo $_smarty_tpl->tpl_vars['combo_productos']->value;?>

										</div>
								</div>

								<!-- CANTIDAD -->
								<div class="form-group">
										<label class="col-sm-6 control-label" for="formGroup">Cantidad de productos</label>
									<div class="col-sm-4">
										<input type="text" class="form-control"  id="cantidad" name="cantidad"  placeholder="Ingresa la cantidad " required>
									</div>
								</div>

                <!-- PRECIO DE VENTA -->
								<div class="form-group">
										<label class="col-sm-6 control-label" for="formGroup">Precio de venta</label>
									<div class="col-sm-4">
										<input type="text" class="form-control"  id="cantidad" name="precioVenta" placeholder="Ingresa el precio" required>
									</div>
								</div>

								<!-- BOTON ENVIAR -->
								<div class="form-group">
									<div class="col-sm-12">
										<p> <input class="btn btn-primary btn-lg active" type="submit" value="Agregar"></p>
									</div>

								</div>


							</form>	<!--  FIN DEL FORMULARIO-->

							<!--SELECCIONAR  -->
			 				<form  class="form-horizontal"action="consumo.php?accion=terminar" method="POST">

			 					<!-- sELECCION DE SERVICIOS -->
			 					<div class="form-group">
			 						<label class="col-sm-6 control-label" for="formGroup">Lista de consumos</label>			 							
			 					</div>


								<div class="form-group">

								<?php if (isset($_smarty_tpl->tpl_vars['consumo']->value)) {?>
									<div class="col-sm-12">
										<!-- TABLA DE INFORMACION DE LA COTIZACION -->
									<table class="table-condensed" >
											<tr>
												<th>Producto</th>
												<th>Cantidad</th>
                        <th>PrecioVenta</th>
												<th>Eliminar</th>
											</tr>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['consumo']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['producto'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['cantidad'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['element']->value['precioVenta'];?>
</td>
												<td><a href="consumo.php?id_consumo=<?php echo $_smarty_tpl->tpl_vars['element']->value['id_servicio'];?>
&accion=eliminar"><img src="../img/cancel.png"></a> </td>
											</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


									</table>
									<?php } else { ?>
											<h1>No has Seleccionado nada </h1>
									<?php }?>

									</div>
								</div>  <!--FIN DEL FROM-GROUP-->

			 					<!-- BOTON ENVIAR -->
			 					<div class="form-group">
			 						<div class="col-sm-12">
			 							<p> <input class="btn btn-primary btn-lg active" type="submit" value="Terminar Cotizacion"></p>
			 						</div>

			 					</div>
			 				</form>

					</div>	<!--FIN DEL CONTAINER -->

			 </div>

	      	<?php $_smarty_tpl->_subTemplateRender("file:../componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	    </div>

	    <!-- CODIGO JAVASCRIPT -->
	    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
 src="../js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
	</body>
	</html>
<?php }
}

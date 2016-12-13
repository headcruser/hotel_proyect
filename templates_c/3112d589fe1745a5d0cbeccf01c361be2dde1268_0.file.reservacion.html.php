<?php
/* Smarty version 3.1.30, created on 2016-12-13 10:31:44
  from "C:\xampp\htdocs\hotel_proyect\templates\empleado\reservacion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584fc0001740a4_35985752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3112d589fe1745a5d0cbeccf01c361be2dde1268' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\empleado\\reservacion.html',
      1 => 1481621501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../componentes/footer.html' => 1,
  ),
),false)) {
function content_584fc0001740a4_35985752 (Smarty_Internal_Template $_smarty_tpl) {
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
						Realiza una Reservacion para un Querido y Amado Cliente
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
					<h3 ><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h3>
					<?php }?>

					<div >
							<!-- Formulario -->
							<form  class="form-horizontal"action="../empleado/reservacion.php?accion=nuevo" method="POST">

								<!-- SELECCION DE CLIENTE -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Selecciona un Cliente</label>
										<div class="col-sm-1">
													<?php echo $_smarty_tpl->tpl_vars['combo_clientes']->value;?>

										</div>
								</div>

								<!-- SELECCION DE CLIENTE -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Selecciona tipo Reserva</label>
										<div class="col-sm-1">
													<?php echo $_smarty_tpl->tpl_vars['combo_tipoReserva']->value;?>

										</div>
								</div>

								<!-- SELECCION DE ESTADO DE Reservacion -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Estado de la reserva</label>
										<div class="col-sm-1">
													<?php echo $_smarty_tpl->tpl_vars['combo_estado']->value;?>

										</div>
								</div>

								<!-- seleccion de habitacion -->
								<div class="form-group">
									<label class="col-sm-6 control-label" for="formGroup">Numero de habitación</label>
										<div class="col-sm-1">
													<?php echo $_smarty_tpl->tpl_vars['combo_habitacion']->value;?>

										</div>
								</div>


								<!-- CANTIDAD -->
								<div class="form-group">
										<label class="col-sm-6 control-label" for="formGroup">Fecha de Reserva</label>
									<div class="col-sm-4">
										<input type="date" class="form-control" name="fechaReserva"  required>
									</div>
								</div>

                <!-- PRECIO DE VENTA -->
								<div class="form-group">
										<label class="col-sm-6 control-label" for="formGroup">Costo de alojamiento</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="costoAlojamiento" placeholder="Ingresa el precio" required>
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
			 				<form  class="form-horizontal"action="reservacion.php?accion=terminar" method="POST">

			 					<!-- sELECCION DE SERVICIOS -->
			 					<div class="form-group">
			 						<label class="col-sm-6 control-label" for="formGroup">Lista de reservaciones</label>
			 					</div>


								<div class="form-group">

								<?php if (isset($_smarty_tpl->tpl_vars['reservaciones']->value)) {?>
									<div class="col-sm-12">
										<!-- TABLA DE INFORMACION DE LA COTIZACION -->
									<table class="table-condensed" >
											<tr>
												<th>Cliente </th>
												<th>Fecha de Reserva </th>
												<th>Costo Alojamiento</th>
                        <th>Tipo de Reserva</th>
												<th>numero de Habitacion</th>
												<th>estado</th>
												<th>Eliminar</th>
											</tr>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservaciones']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['cliente'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['fechaReserva'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['costoAlojamiento'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['tipoReserva'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['element']->value['numero'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['element']->value['estado'];?>
</td>
												<td><a href="reservaciones.php?id_reservacion=<?php echo $_smarty_tpl->tpl_vars['element']->value['id_tipoReserva'];?>
&accion=eliminar"><img src="../img/cancel.png"></a> </td>
											</tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


									</table>
									<?php }?>

									<br>
									<!-- BOTON ENVIAR -->
									<div class="form-group">
										<div class="col-sm-12">
											<p> <input class="btn btn-primary btn-lg active" type="submit" value="Terminar Reservacion"></p>
										</div>
									</div>
								</div>  <!--FIN DEL FROM-GROUP-->

									</div>
			 				</form>
					</div>	<!--FIN DEL CONTAINER -->
					<?php $_smarty_tpl->_subTemplateRender("file:../componentes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			 </div>


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

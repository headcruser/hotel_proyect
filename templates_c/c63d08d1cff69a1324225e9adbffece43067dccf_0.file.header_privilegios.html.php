<?php
/* Smarty version 3.1.30, created on 2016-12-12 04:05:58
  from "C:\xampp\htdocs\hotel_proyect\templates\componentes\header_privilegios.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584e1416092f18_84141734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63d08d1cff69a1324225e9adbffece43067dccf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\componentes\\header_privilegios.html',
      1 => 1481511845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584e1416092f18_84141734 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header privilegios -->
<header>
  <div id="enlaces">
    <a href="en">English version </a>
  </div>

  <!--logotipos -->
  <div id="logo">
    <!--Agrega una imagen -->
    <img src="../img/banners/baner.png" />
  </div>

    <!-- Menu de navegación -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navegacion" aria-expanded="false">
            <span class="sr-only">Desplegar / Ocultar menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Titulo de la pagina web -->
          <a class="navbar-brand" href="index.php">Hotel Dumort</a>
        </div>

        <!-- Inicia el menu-->
        <div class="collapse navbar-collapse" id="menu-navegacion">
          <ul class="nav navbar-nav">

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "empleado") {?>
                <li ><a href="../index.php">Pagina Principal</a></li>
              <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "empleado") {?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Servicios <span class="caret"></span>
                </a>
                  <!-- SubMenu -->
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="../empleado/reservacion.php">Realizar una Reservación</a></li>
                      <li><a href="algo"> Algo mas</a></li>
                  </ul>
              </li>
            <?php }?>



            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
                <li ><a href="../admin/index.php">hola_cliente</a></li>
              <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente") {?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Servicios <span class="caret"></span>
                </a>
                  <!-- SubMenu -->
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="../cliente/facturacion.php">Mi factura Electrónica</a></li>
                      <li><a href="../cliente/consumo.php">Registrar consumo</a></li>
                  </ul>
              </li>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador") {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Contador <span class="caret"></span>
              </a>
                <!-- SubMenu -->
                <ul class="dropdown-menu" role="menu">

                      <li><a href="admClientes.php">Clientes</a></li>
                      <li><a href="admConsumo.php">Consumos</a></li>
                      <li><a href="admEmpleado.php">Empleados</a></li>
                      <li><a href="admEstado.php">Estados del sistema</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a href="admPago.php">Ver pagos</a></li>
                  <li><a href="admProducto.php">Ver Productos</a></li>
                  <li><a href="admReserva.php">Ver Reservas</a></li>


                  <li role="separator" class="divider"></li>
                  <li><a href="admtipoComprobante.php">Tipo comprobante</a></li>
                  <li><a href="admTipoHabitacion.php">Tipo de habitacion</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a href="admTipoReserva.php">Tipo de Reservacion</a></li>
                  <li><a href="admuMedida.php">Unidad de medida</a></li>
                  <li><a href="admHabitacion.php">Habitaciones</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a href="reporte.php">Visualizar Reporte</a></li>
                  <?php }?>
                <?php }?>
                </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
              <li><a href="perfil.php"> <span class="glyphicon glyphicon-user"> Perfil</span></a></li>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente" || $_smarty_tpl->tpl_vars['privilegio']->value == "empleado") {?>
                    <li><a href="../admin/perfil.php"><span class="glyphicon glyphicon-user"> Perfil</span></a></li>
                    <?php }?>

              <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
              <ul class="dropdown-menu">


                    <li><a href="usuario.php">Usuario</a></li>
                    <li><a href="rol.php">Rol</a></li>
                    <li><a href="privilegio.php">Privilegio</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="rol_privilegio.php">Rol Privilegio</a></li>
                    <li><a href="usuario_rol.php">Usuario Rol</a></li>
              </ul>
            </li>
            <?php }?>
          <?php }?>
            <li><a href="login.php?accion=logout"></a></li>
            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "contador" || $_smarty_tpl->tpl_vars['privilegio']->value == "administrador") {?>
              <li><a href="login.php?accion=logout"><span class="glyphicon glyphicon-off"> Salir</span></a></li>
              <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "login") {?>
                <li><a href="login.php"><span class="glyphicon glyphicon-cloud-upload"> Acceder</span></a>
                <?php }?>

                </li>
              <?php }?>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['privilegio']->value)) {?>
              <?php if ($_smarty_tpl->tpl_vars['privilegio']->value == "cliente" || $_smarty_tpl->tpl_vars['privilegio']->value == "empleado") {?>
              <li><a href="../admin/login.php?accion=logout"><span class="glyphicon glyphicon-off"> Salir</span></a></li>
              <?php }?>
            <?php }?>

          </ul>

      </div>  <!--Fin del menu-->
    </nav>
</header>
<?php }
}

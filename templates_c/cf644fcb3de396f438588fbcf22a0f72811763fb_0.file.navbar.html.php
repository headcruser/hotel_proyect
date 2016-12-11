<?php
/* Smarty version 3.1.30, created on 2016-12-07 07:39:27
  from "C:\xampp\htdocs\hotel_proyect\templates\publico\navbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5847ae9f2cec06_92751442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf644fcb3de396f438588fbcf22a0f72811763fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\publico\\navbar.html',
      1 => 1481092762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5847ae9f2cec06_92751442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Navegación -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- icono mostrado en modo móvil-->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Hotel Dumort</a>
            </div>

            <!-- Contenido del navbar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="portafolio.php"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Infraestructura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Acerca de</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contactos</a>
                    </li>

					          <li>
                        <a class="page-scroll" href="admin/index.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<?php }
}

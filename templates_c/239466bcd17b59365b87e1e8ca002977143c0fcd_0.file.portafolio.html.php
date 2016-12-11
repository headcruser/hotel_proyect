<?php
/* Smarty version 3.1.30, created on 2016-12-05 18:25:52
  from "C:\xampp\htdocs\hotel_proyect\templates\publico\portafolio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5845a320ec7d63_37223275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239466bcd17b59365b87e1e8ca002977143c0fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\publico\\portafolio.html',
      1 => 1480958748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publico/navbar.html' => 1,
    'file:publico/header.html' => 1,
    'file:publico/servicios.html' => 1,
    'file:publico/acerca.html' => 1,
    'file:publico/clientes.html' => 1,
    'file:publico/contacto.html' => 1,
    'file:publico/footer.html' => 1,
    'file:publico/modal1.html' => 1,
    'file:publico/modal2.html' => 1,
    'file:publico/modal3.html' => 1,
    'file:publico/modal4.html' => 1,
    'file:publico/modal5.html' => 1,
    'file:publico/modal6.html' => 1,
    'file:publico/js.html' => 1,
  ),
),false)) {
function content_5845a320ec7d63_37223275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Reservaciones Hotel Dumort</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>

		<!--Barra de navagación  -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/navbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<!-- header de la pagina -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender("file:publico/servicios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Sección portafolio-->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Infraestructura</h2>
                    <h3 class="section-subheading text-muted">El hotel cuenta con .</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Servicio a la habitación </h4>
                        <p class="text-muted">Habitaciónes</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4> Productos Hotel</h4>
                        <p class="text-muted">Mercadotecnia</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Ofertas del mes</h4>
                        <p class="text-muted">Descuentos hasta el 20%</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Portafolio</h4>
                        <p class="text-muted">Diseño web</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Diseño web</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sueños</h4>
                        <p class="text-muted">Diseño web</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<!-- seccion de sobre mi  -->
			<?php $_smarty_tpl->_subTemplateRender("file:publico/acerca.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<!-- seccion de los clientes  -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/clientes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Contacto -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/contacto.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<!--  footer -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Portafolio Modals -->
    <?php $_smarty_tpl->_subTemplateRender("file:publico/modal1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender("file:publico/modal2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php $_smarty_tpl->_subTemplateRender("file:publico/modal3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php $_smarty_tpl->_subTemplateRender("file:publico/modal4.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php $_smarty_tpl->_subTemplateRender("file:publico/modal5.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php $_smarty_tpl->_subTemplateRender("file:publico/modal6.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<!-- Scripts js -->
		<?php $_smarty_tpl->_subTemplateRender("file:publico/js.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}

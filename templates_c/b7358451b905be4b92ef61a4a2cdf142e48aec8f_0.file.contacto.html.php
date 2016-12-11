<?php
/* Smarty version 3.1.30, created on 2016-12-02 19:28:52
  from "C:\xampp\htdocs\hotel_proyect\templates\publico\contacto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5841bd64403063_81752946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7358451b905be4b92ef61a4a2cdf142e48aec8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\publico\\contacto.html',
      1 => 1480703226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5841bd64403063_81752946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contactarme</h2>
                <h3 class="section-subheading text-muted">Envianos tu opinion, ya que es importante .</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tu nombre *" id="name" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Tu Email *" id="email" required>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Tu Teléfono *" id="phone" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Tu Mensaje *" id="message" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-12-07 06:14:20
  from "C:\xampp\htdocs\hotel_proyect\templates\componentes\query2html.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58479aac264aa8_53018974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cea6f050dda2d276511c72ac6439df73054b7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\componentes\\query2html.component.html',
      1 => 1481087644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58479aac264aa8_53018974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-striped" >
<!-- EL QUERY COMPONENT MUESTRA UNA TABLA DE MANERA DINAMICOA -->
	<tr>
		<?php
$__section_columna_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columna']) ? $_smarty_tpl->tpl_vars['__smarty_section_columna'] : false;
$__section_columna_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['campos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columna_0_total = $__section_columna_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_columna'] = new Smarty_Variable(array());
if ($__section_columna_0_total != 0) {
for ($__section_columna_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index'] = 0; $__section_columna_0_iteration <= $__section_columna_0_total; $__section_columna_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index']++){
?>
			<th>
				<?php echo $_smarty_tpl->tpl_vars['campos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columna']->value['index'] : null)];?>

			</th>

		<?php
}
}
if ($__section_columna_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columna'] = $__section_columna_0_saved;
}
?>		
	</tr>		
		<?php
$__section_renglon_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_renglon']) ? $_smarty_tpl->tpl_vars['__smarty_section_renglon'] : false;
$__section_renglon_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['datos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_renglon_1_total = $__section_renglon_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_renglon'] = new Smarty_Variable(array());
if ($__section_renglon_1_total != 0) {
for ($__section_renglon_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index'] = 0; $__section_renglon_1_iteration <= $__section_renglon_1_total; $__section_renglon_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index']++){
?>
			<tr >
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_renglon']->value['index'] : null)], 'dato', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['dato']->value) {
?>

					<td>
						<?php echo $_smarty_tpl->tpl_vars['dato']->value;?>

					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tr>
		<?php
}
}
if ($__section_renglon_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_renglon'] = $__section_renglon_1_saved;
}
?>
</table><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-12-03 22:58:15
  from "C:\xampp\htdocs\hotel_proyect\templates\componentes\select.component.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58433ff7794584_90140216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dcc38be65ce25271b618b746731edad23f7d0f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotel_proyect\\templates\\componentes\\select.component.html',
      1 => 1476309232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58433ff7794584_90140216 (Smarty_Internal_Template $_smarty_tpl) {
?>

<select class="select" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
         
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
         	<option value=<?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
 <?php if ($_smarty_tpl->tpl_vars['dato']->value[0] == $_smarty_tpl->tpl_vars['selected']->value) {?>
         		selected <?php }?>>
         		<?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
</option>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


 </select><?php }
}

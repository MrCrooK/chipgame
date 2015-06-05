<?php /* Smarty version 3.1.24, created on 2015-06-03 16:32:34
         compiled from "./templates/sitemap.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1105159032556f01f2dbf772_78556180%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a340561e3c27983bb056043d17f245aed6d3d51' => 
    array (
      0 => './templates/sitemap.tpl',
      1 => 1433246547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105159032556f01f2dbf772_78556180',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556f01f2dd6f37_02057366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f01f2dd6f37_02057366')) {
function content_556f01f2dd6f37_02057366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1105159032556f01f2dbf772_78556180';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Карта сайта | ChipGame",'description'=>'','keywords'=>''), 0);
?>

	<h1>Карта сайта</h1>
	<div class="content">
	<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</a><br>
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
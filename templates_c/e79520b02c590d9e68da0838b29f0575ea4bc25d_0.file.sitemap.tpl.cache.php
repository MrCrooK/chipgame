<?php /* Smarty version 3.1.24, created on 2015-06-04 18:01:13
         compiled from "./templates/sitemap.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205922276455706839a75da9_01314700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e79520b02c590d9e68da0838b29f0575ea4bc25d' => 
    array (
      0 => './templates/sitemap.tpl',
      1 => 1433246547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205922276455706839a75da9_01314700',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55706839a950e4_94698000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55706839a950e4_94698000')) {
function content_55706839a950e4_94698000 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205922276455706839a75da9_01314700';
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
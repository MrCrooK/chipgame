<?php /* Smarty version 3.1.24, created on 2015-06-03 16:32:30
         compiled from "./templates/pop.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184959976556f01eeb6df73_59725684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a35efe4e639d78cb20e9ba2495431447dfff15' => 
    array (
      0 => './templates/pop.tpl',
      1 => 1433241794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184959976556f01eeb6df73_59725684',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556f01eeb8fe05_60872403',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f01eeb8fe05_60872403')) {
function content_556f01eeb8fe05_60872403 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184959976556f01eeb6df73_59725684';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Популярное видео | ChipGame",'description'=>"Популярное видео на сайте ChipGame! У нас вы найдете самое популярное видео",'keywords'=>"Популярное видео, Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб"), 0);
?>

<?php echo '<script'; ?>
>jQuery(function () {preload('COUNT')});<?php echo '</script'; ?>
>
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
" class="box">
		<div class="countnum"><?php echo $_smarty_tpl->tpl_vars['item']->value['COUNT'];?>
</div>
		<img src="/templates/images/nopgoto.png" data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['IMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
" width="100%">
		<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h2>
	</a>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
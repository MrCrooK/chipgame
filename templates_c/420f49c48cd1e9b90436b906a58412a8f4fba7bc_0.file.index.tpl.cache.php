<?php /* Smarty version 3.1.24, created on 2015-06-05 09:25:29
         compiled from "./templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1756297376557140d9b4ce96_82208414%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420f49c48cd1e9b90436b906a58412a8f4fba7bc' => 
    array (
      0 => './templates/index.tpl',
      1 => 1433241810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756297376557140d9b4ce96_82208414',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557140d9c0c0d7_16131522',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557140d9c0c0d7_16131522')) {
function content_557140d9c0c0d7_16131522 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1756297376557140d9b4ce96_82208414';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Видео приколы – самое смешное видео онлайн, видео приколы Ютуб | ChipGame",'description'=>"Видео приколы и самое смешное видео на сайте ChipGame! Смотри онлайн популярные видео приколы Ютуб, лучшие подборки и клипы. Приколы – лучший способ поднять настроение. Включайте видео приколы и делитесь впечатлениями с друзьями",'keywords'=>"Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб"), 0);
?>

<?php echo '<script'; ?>
>jQuery(function () {preload('ID')});<?php echo '</script'; ?>
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
<?php /* Smarty version 3.1.24, created on 2015-06-26 11:18:16
         compiled from "./templates/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:303053141558ceea8aafae5_90886909%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cb51f0e8d9ccd4331e7441dbaa75f7110ef0cb' => 
    array (
      0 => './templates/404.tpl',
      1 => 1433247032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303053141558ceea8aafae5_90886909',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558ceea8ac8244_17018241',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558ceea8ac8244_17018241')) {
function content_558ceea8ac8244_17018241 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '303053141558ceea8aafae5_90886909';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Ошибка 404. Страница не найдена.",'description'=>'','keywords'=>''), 0);
?>

<?php echo '<script'; ?>
 src="404/js/svg.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="404/js/perlin-noise-simplex.js"><?php echo '</script'; ?>
>
<div id="notfound"></div>
<?php echo '<script'; ?>
 src="404/js/index.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
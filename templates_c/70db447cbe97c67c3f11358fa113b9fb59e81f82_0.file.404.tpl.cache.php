<?php /* Smarty version 3.1.24, created on 2015-06-03 09:19:48
         compiled from "./templates/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:487892158556e9c8414da08_40666365%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70db447cbe97c67c3f11358fa113b9fb59e81f82' => 
    array (
      0 => './templates/404.tpl',
      1 => 1433247032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487892158556e9c8414da08_40666365',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556e9c84163171_72249024',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556e9c84163171_72249024')) {
function content_556e9c84163171_72249024 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '487892158556e9c8414da08_40666365';
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
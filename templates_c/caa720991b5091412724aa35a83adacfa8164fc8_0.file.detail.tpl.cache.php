<?php /* Smarty version 3.1.24, created on 2015-06-03 16:35:11
         compiled from "./templates/detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:500574011556f028f263061_70171675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa720991b5091412724aa35a83adacfa8164fc8' => 
    array (
      0 => './templates/detail.tpl',
      1 => 1433313313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500574011556f028f263061_70171675',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_556f028f27c609_29068374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f028f27c609_29068374')) {
function content_556f028f27c609_29068374 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '500574011556f028f263061_70171675';
echo '/*%%SmartyNocache:500574011556f028f263061_70171675%%*/<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(\'title\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'TITLE\'])." | ChipGame",\'description\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'DESCRIPTION\']),\'keywords\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'KEYWORDS\'])), 0);
?>
/*/%%SmartyNocache:500574011556f028f263061_70171675%%*/';?>

			<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h1>
			<div class="content">
				<iframe width="960" height="540" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['VIDEO'];?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['TEXT'];?>

				 
				<!-- Put this script tag to the <head> of your page -->
				<?php echo '<script'; ?>
 type="text/javascript" src="//vk.com/js/api/openapi.js?115"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript">VK.init({apiId: 2322479, onlyWidgets: true});<?php echo '</script'; ?>
>
				<!-- Put this div tag to the place, where the Comments block will be -->
				<div id="vk_comments"></div>
				<?php echo '<script'; ?>
 type="text/javascript">
				VK.Widgets.Comments("vk_comments", {limit: 10, width: "960", attach: "*"});
				<?php echo '</script'; ?>
>
				 
			</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
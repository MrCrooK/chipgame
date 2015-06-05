<?php /* Smarty version 3.1.24, created on 2015-06-05 16:21:58
         compiled from "./templates/detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12790753315571a276ca1332_42755605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c22ce26ff43bb88c5712a1b5e0e8e6a5928f16' => 
    array (
      0 => './templates/detail.tpl',
      1 => 1433420263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12790753315571a276ca1332_42755605',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_5571a276cc4f04_22950761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5571a276cc4f04_22950761')) {
function content_5571a276cc4f04_22950761 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12790753315571a276ca1332_42755605';
echo '/*%%SmartyNocache:12790753315571a276ca1332_42755605%%*/<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(\'title\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'TITLE\'])." | ChipGame",\'description\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'DESCRIPTION\']),\'keywords\'=>((string)$_smarty_tpl->tpl_vars[\'item\']->value[\'KEYWORDS\'])), 0);
?>
/*/%%SmartyNocache:12790753315571a276ca1332_42755605%%*/';?>

			<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h1>
			<div class="content" itemscope itemtype="http://schema.org/VideoObject">
				<div style="display: none">		
				<a style="display: none" itemprop="url" href="http://chipgame.ru<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
" ><h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h1></a>
				<meta itemprop="duration" content="<?php echo $_smarty_tpl->tpl_vars['item']->value['DURATION'];?>
">
				<meta itemprop="isFamilyFriendly" content="true">
				<span itemprop="uploadDate"><?php echo $_smarty_tpl->tpl_vars['item']->value['UPLOAD'];?>
</span>
				<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"><img itemprop="contentUrl" src="http://chipgame.ru<?php echo $_smarty_tpl->tpl_vars['item']->value['IMG'];?>
" ><meta itemprop="width" content="331"><meta itemprop="height" content="180"></span>
				</div>
	
				<iframe width="960" height="540" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['VIDEO'];?>
?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['item']->value['TEXT'];?>
</p>
				 
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
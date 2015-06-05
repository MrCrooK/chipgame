<?php /* Smarty version 3.1.24, created on 2015-06-03 16:32:46
         compiled from "./templates/search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:800607878556f01fe1a00a4_05624253%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0377f6de4dcc77faba6b8222400ad82f80faed' => 
    array (
      0 => './templates/search.tpl',
      1 => 1433231584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800607878556f01fe1a00a4_05624253',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556f01fe1b6a11_47382506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f01fe1b6a11_47382506')) {
function content_556f01fe1b6a11_47382506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '800607878556f01fe1a00a4_05624253';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Поиск по сайту | ChipGame",'description'=>"Поиск по сайту | Смотри онлайн популярные видео приколы Ютуб, лучшие подборки и клипы. Приколы – лучший способ поднять настроение. Включайте видео приколы и делитесь впечатлениями с друзьями",'keywords'=>"Поиск, Поиск приколов, Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб"), 0);
?>

		
		<?php echo '<script'; ?>
>
		  (function() {
			var cx = '011499426413394691197:diiigrfjpyi';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		  })();
		<?php echo '</script'; ?>
>
		<div class="content">
		<gcse:search queryParameterName="q"></gcse:search>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
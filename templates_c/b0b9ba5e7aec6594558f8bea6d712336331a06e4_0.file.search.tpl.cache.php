<?php /* Smarty version 3.1.24, created on 2015-06-04 18:01:18
         compiled from "./templates/search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8402258375570683ec7daf8_28725837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0b9ba5e7aec6594558f8bea6d712336331a06e4' => 
    array (
      0 => './templates/search.tpl',
      1 => 1433231584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8402258375570683ec7daf8_28725837',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5570683ec94170_75131616',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5570683ec94170_75131616')) {
function content_5570683ec94170_75131616 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8402258375570683ec7daf8_28725837';
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
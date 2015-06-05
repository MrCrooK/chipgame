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
    '31eb791ad72e57f7990b673e1ecd8b171518028e' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1433230622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500574011556f028f263061_70171675',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_556f028f287c28_12298614',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f028f287c28_12298614')) {
function content_556f028f287c28_12298614 ($_smarty_tpl) {

echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['item']->value['TITLE'])." | ChipGame",'description'=>((string)$_smarty_tpl->tpl_vars['item']->value['DESCRIPTION']),'keywords'=>((string)$_smarty_tpl->tpl_vars['item']->value['KEYWORDS'])), 0);
?>

			<h1>Шон О'Коннелл - самый позитивный боец UFC</h1>
			<div class="content">
				<iframe width="960" height="540" src="https://www.youtube.com/embed/buWfBfCKqpc?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				
				 
				<!-- Put this script tag to the <head> of your page -->
				<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
				<script type="text/javascript">VK.init({apiId: 2322479, onlyWidgets: true});</script>
				<!-- Put this div tag to the place, where the Comments block will be -->
				<div id="vk_comments"></div>
				<script type="text/javascript">
				VK.Widgets.Comments("vk_comments", {limit: 10, width: "960", attach: "*"});
				</script>
				 
			</div>
		<div class="right-box"></div>
    </div>
  <div class="page-buffer"></div>
  </div>
  <div id="footer">
    <div class="left">Development by <a href="mailto:crook@inbox.ru">MrCrooK</a></div>
    <div class="right">
	
	<!-- Yandex.Metrika informer -->
	<a href="https://metrika.yandex.ru/stat/?id=24093889&amp;from=informer"
	target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/24093889/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
	style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:24093889,lang:'ru'});return false}catch(e){}"/></a>
	<!-- /Yandex.Metrika informer -->

	<!-- Yandex.Metrika counter -->
	<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
	<script type="text/javascript">
	try { var yaCounter24093889 = new Ya.Metrika({id:24093889,
			  webvisor:true,
			  clickmap:true,
			  trackLinks:true,
			  accurateTrackBounce:true});
	} catch(e) { }
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/24093889" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->		
	 
	</div>
  </div>
</body>
</html>
<?php }
}
?>
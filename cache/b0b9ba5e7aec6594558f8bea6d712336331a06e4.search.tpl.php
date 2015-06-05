<?php
/*%%SmartyHeaderCode:75585840755717b816d0747_54394773%%*/
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
    '3886f3f090f29dcb8617db0c28842ce9b73e2a99' => 
    array (
      0 => './templates/header.tpl',
      1 => 1433231115,
      2 => 'file',
    ),
    '33182f7e40d06ae680f04a70e6bb3f19d5a196cb' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1433230622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75585840755717b816d0747_54394773',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55717b816ffda2_88233730',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55717b816ffda2_88233730')) {
function content_55717b816ffda2_88233730 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Поиск по сайту | ChipGame</title>
  <meta name="description" content="Поиск по сайту | Смотри онлайн популярные видео приколы Ютуб, лучшие подборки и клипы. Приколы – лучший способ поднять настроение. Включайте видео приколы и делитесь впечатлениями с друзьями">
  <meta name="keywords" content="Поиск, Поиск приколов, Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="/templates/script.js" type="text/javascript"></script>
  <link href="http://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>     
  <link href="/templates/style.css" type="text/css" rel="stylesheet">
  <meta name='yandex-verification' content='5d92137161d2d941' />
  <meta name="google-site-verification" content="A8Fk1F-LwlUl3ztml9BQDbAZMBm-3PG3yNjeP-07kFs" />
</head>
<body>
  <div id="wrapper">
    <div id="menu">
        <a href="/">Новинки</a>
        <a href="/pop.php">Популярное</a>
        <a href="/sitemap.php">Карта сайта</a>
		<form id="search" action="/search.php" method="GET" accept-charset="utf-8"><input type="text" name="q" placeholder="Поиск по сайту..."></form>
    </div>
    <div class="hede-menu"></div>
    <div class="hede-menu"></div>
    <div id="no-size-content">
		
		<script>
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
		</script>
		<div class="content">
		<gcse:search queryParameterName="q"></gcse:search>
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
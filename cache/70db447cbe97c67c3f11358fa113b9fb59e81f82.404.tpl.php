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
    'f9f45c6461a5204c385fe990dfc0fc8ae592dae6' => 
    array (
      0 => './templates/header.tpl',
      1 => 1433231115,
      2 => 'file',
    ),
    '31eb791ad72e57f7990b673e1ecd8b171518028e' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1433230622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487892158556e9c8414da08_40666365',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556e9c84175659_40716222',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556e9c84175659_40716222')) {
function content_556e9c84175659_40716222 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ошибка 404. Страница не найдена.</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
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
<script src="404/js/svg.js"></script>
<script src="404/js/perlin-noise-simplex.js"></script>
<div id="notfound"></div>
<script src="404/js/index.js"></script>
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
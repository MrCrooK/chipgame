<?php /* Smarty version 3.1.24, created on 2015-06-26 14:30:47
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:566121325558d1bc70eba10_15757572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3886f3f090f29dcb8617db0c28842ce9b73e2a99' => 
    array (
      0 => './templates/header.tpl',
      1 => 1435230001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '566121325558d1bc70eba10_15757572',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558d1bc70f1e63_40591011',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558d1bc70f1e63_40591011')) {
function content_558d1bc70f1e63_40591011 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '566121325558d1bc70eba10_15757572';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-latest.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/templates/script.js" type="text/javascript"><?php echo '</script'; ?>
>
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
	<div style="margin: 0 auto">
	<?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
	<!-- ChipGameRU -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-3579954790140386"
		 data-ad-slot="6773261157"></ins>
	<?php echo '<script'; ?>
>
	(adsbygoogle = window.adsbygoogle || []).push({});
	<?php echo '</script'; ?>
>
	</div><?php }
}
?>
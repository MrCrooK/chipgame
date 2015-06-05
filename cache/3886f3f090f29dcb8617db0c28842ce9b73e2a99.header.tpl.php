<?php
/*%%SmartyHeaderCode:14572279425571a276cd5132_14424080%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3886f3f090f29dcb8617db0c28842ce9b73e2a99' => 
    array (
      0 => './templates/header.tpl',
      1 => 1433231115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14572279425571a276cd5132_14424080',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5571a276cdcd23_91164760',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5571a276cdcd23_91164760')) {
function content_5571a276cdcd23_91164760 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> | ChipGame</title>
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
    <div id="no-size-content"><?php }
}
?>
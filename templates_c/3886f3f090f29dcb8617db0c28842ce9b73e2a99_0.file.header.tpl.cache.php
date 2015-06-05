<?php /* Smarty version 3.1.24, created on 2015-06-05 09:25:29
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:266698972557140d9c14a48_29355921%%*/
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
  'nocache_hash' => '266698972557140d9c14a48_29355921',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557140d9c1b1d2_83124142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557140d9c1b1d2_83124142')) {
function content_557140d9c1b1d2_83124142 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266698972557140d9c14a48_29355921';
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
    <div id="no-size-content"><?php }
}
?>
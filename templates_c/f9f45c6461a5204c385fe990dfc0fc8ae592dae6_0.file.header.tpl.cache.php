<?php /* Smarty version 3.1.24, created on 2015-06-03 16:46:39
         compiled from "./templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1008190419556f053f08dba5_78179728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f45c6461a5204c385fe990dfc0fc8ae592dae6' => 
    array (
      0 => './templates/header.tpl',
      1 => 1433231115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1008190419556f053f08dba5_78179728',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556f053f092c96_28943129',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556f053f092c96_28943129')) {
function content_556f053f092c96_28943129 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1008190419556f053f08dba5_78179728';
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
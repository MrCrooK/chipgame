<?php
require 'libs/Smarty.class.php';
require 'libs/sql.php';

$smarty = new Smarty;

$arElem = sql_query("SELECT * FROM  `elem` WHERE  `SHOW` =  '1' ORDER BY  `COUNT` DESC LIMIT 0 , 25");
foreach($arElem as $item):
	$item["COUNT"] = $item["COUNT"].' просмотр'.numberEnd($item["COUNT"], array('', 'а', 'ов'));
	$rows[] = $item;
endforeach;

$smarty->assign('items', $rows);

$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->display('pop.tpl');
	
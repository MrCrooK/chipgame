<?php
require 'libs/Smarty.class.php';
require 'libs/sql.php';

$smarty = new Smarty;

$arElem = sql_query("SELECT * FROM  `elem` WHERE  `URL` =  '/".$_GET["route"]."'");
if(!$arElem):
	header("HTTP/1.0 410 Gone"); 
	$smarty->force_compile = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->display('404.tpl');
else:
	foreach($arElem as $item):
		update_count($item["URL"]);
		$item["COUNT"] = $item["COUNT"].' просмотр'.numberEnd($item["COUNT"], array('', 'а', 'ов'));
		if(strripos($item["VIDEO"],'iframe')) $item["VIDEO"] = str_replace(array(".php", "/"),"",$item["URL"]);
		$rows = $item;
	endforeach;

	$smarty->assign('item', $rows);

	$smarty->force_compile = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	$smarty->display('detail.tpl');
endif;
	
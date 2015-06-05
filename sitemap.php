<?require 'libs/Smarty.class.php';?>
<?require("libs/sql.php");?>
<?$arElem = sql_query("SELECT * FROM  `elem` WHERE  `SHOW` =  '1' ORDER BY  `ID` DESC");?>
<?$file = '<?xml version="1.0" encoding="UTF-8"?><urlset>';?>
	<?if(is_array($arElem)):$i=1;foreach($arElem as $item):?>
		<?$rows[] = $item;?>
		<?$file .= '<url><loc>http://chipgame.ru'.$item["URL"].'</loc></url>';?>
	<?endforeach;endif;?>	
<?$file .= '</urlset>';?>
<?file_put_contents("sitemap.xml",$file,FILE_USE_INCLUDE_PATH)?>

<?
$smarty = new Smarty;

$smarty->assign('items', $rows);

$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->display('sitemap.tpl');
?>
<?require_once("libs/sql.php");?>
<?$startFrom = $_REQUEST['startFrom'];?>
<?$sort = $_REQUEST['sort'];?>
<?if(!$sort) $sort = 'ID'?>
<?$arElem = sql_query("SELECT * FROM  `elem` WHERE  `SHOW` =  '1' ORDER BY  {$sort} DESC LIMIT  {$startFrom} , 25");?>
<?if(is_array($arElem)):foreach($arElem as $item):?>
<?$element = "
	<a href='".$item["URL"]."' class='box'>
		<div class='countnum'>".$item["COUNT"].' просмотр'.numberEnd($item["COUNT"], array('', 'а', 'ов'))."</div>
		<img src='/images/nopgoto.png' data-src='".$item["IMG"]."' alt='".$item["NAME"]."' width='100%'>
		<h2>".$item["NAME"]."</h2>
	</a>
	";
	$articles[] = $element;
?>
<?endforeach;endif;?>
<?
// Превращаем массив статей в json-строку для передачи через Ajax-запрос
echo json_encode($articles);
?>

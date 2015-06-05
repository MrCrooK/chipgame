<?
$title = "Админка";
?>
<?require_once("header.php");?>
<?require_once("../libs/sql.php");?>
<?
$order	= ($_REQUEST["order"])? $_REQUEST["order"] : "id";
$sort	= ($_REQUEST["sort"])? $_REQUEST["sort"] : "desc";
$page	= ($_REQUEST["page"])? $_REQUEST["page"] : "1";
$apage	= count_elem(20);
?>
<?$arElem = sql_query('SELECT * FROM  `elem` ORDER BY `'.$order.'` '.$sort.' LIMIT '.(($page-1)*20).', 20');?>
<table width="100%" class="admin-table" border="0" cellspacing="0" cellpadding="0">
	<form method="GET" action="">
	<tr>
		<th<?if($order=="id") echo ' class="activ"'?>><a href="?order=id&sort=<?=($order=="id"&&$sort=="desc")?"asc":"desc"?>&page=<?=$page?>">ID</a></th>
		<th width="100px">Картинка</th>
		<th<?if($order=="name") echo ' class="activ"'?>><a href="?order=name&sort=<?=($order=="name"&&$sort=="desc")?"asc":"desc"?>&page=<?=$page?>">Название</a></th>
		<th<?if($order=="url") echo ' class="activ"'?>><a href="?order=url&sort=<?=($order=="url"&&$sort=="desc")?"asc":"desc"?>&page=<?=$page?>">Адрес страницы</a></th>
		<th<?if($order=="count") echo ' class="activ"'?>><a href="?order=count&sort=<?=($order=="count"&&$sort=="desc")?"asc":"desc"?>&page=<?=$page?>">Просмотры</a></th>
		<th<?if($order=="show") echo ' class="activ"'?>><a href="?order=show&sort=<?=($order=="show"&&$sort=="desc")?"asc":"desc"?>&page=<?=$page?>">Активность</a></th>
	</tr>
	</form>
<?if(is_array($arElem)):foreach($arElem as $item):?>
	<tr>
		<td align="center"> <a href="/admin/edit.php?file=<?=$item["URL"]?>"><?=$item["ID"]?></a> </td>
		<td><a href="/admin/edit.php?file=<?=$item["URL"]?>"><img width="102px" src="<?=$item["IMG"]?>"></a></td>
		<td class="name"><a href="/admin/edit.php?file=<?=$item["URL"]?>"><?=$item["NAME"]?></a></td>
		<td align="center"><a href="<?=$item["URL"]?>"><?=$item["URL"]?></a></td>
		<td align="center"><?=$item["COUNT"]?></td>
		<td align="center"><?=($item["SHOW"])? "Да" : "Нет";?></td>
	</tr>
<?endforeach;endif;?>
</table>

<div class="pagenav">
<div class="pgn">Страница <?=$page?> из <?=$apage?></div>
<?while($i < $apage):$i++; if($i!=$page):?>
	<a href="?order=<?=$order?>&sort=<?=$sort?>&page=<?=$i?>"><?=$i?></a>
<?else:?>
	<span><?=$i?></span>
<?endif;endwhile;?>
</div>
<?require_once("footer.php");?>
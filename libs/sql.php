<?
$link = mysql_connect('localhost', 'root', 'L2#crooker')
    or die('Не удалось соединиться: ' . mysql_error());

mysql_select_db('chipgame') or die('Не удалось выбрать базу данных');

function sql_query($query) {
    $result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	if($result):
	while($ar = mysql_fetch_array($result, MYSQL_ASSOC))
		$arResult[] = $ar;
	return $arResult;
	else:
	return false;
	endif;
}

function is_elem($url) {
    $result = mysql_query("SELECT * FROM  `elem` WHERE  `URL` LIKE  '$url' ORDER BY  `elem`.`ID` DESC LIMIT 0 , 1");
	if(!is_array(mysql_fetch_array($result, MYSQL_ASSOC))):
			return true;
	else:
			return false;
	endif;
}

function add_elem($img, $name, $url, $title, $description, $keywords, $video, $text, $duration, $upload, $show) {
	if(mysql_query("INSERT INTO `elem` (`IMG`, `NAME`, `URL`, `TITLE`, `DESCRIPTION`, `KEYWORDS`, `VIDEO`, `TEXT`, `DURATION`, `SHOW`, `UPLOAD`) VALUES ('{$img}', '{$name}', '{$url}', '{$title}', '{$description}', '{$keywords}', '{$video}', '{$text}', '{$duration}', '{$show}', '{$upload}')"))
		return true;
	else
		return false;
}

function update_count($url) {
	if(mysql_query("UPDATE `elem` SET `COUNT` =  `COUNT` + 1 WHERE `elem`.`URL` = '$url';"))
		return true;
	else
		return false;
}

function count_elem ($p) {
	$result = mysql_query("SELECT COUNT(*) FROM `elem`");
	if($ar = mysql_fetch_array($result, MYSQL_ASSOC)):
		$c = current($ar);
		$page = ceil($c/$p);
		return $page;
	else:
		return false;
	endif;	
}

function edit_elem($title,$img,$count,$show,$url) {
	$title = mysql_escape_string(htmlspecialchars(strip_tags($title)));
	if($show=="Y") $show = 1; else $show = 0;
	if(mysql_query("UPDATE `elem` SET `IMG` =  '$img', `NAME` =  '$title', `SHOW` =  '$show', `COUNT` =  '$count' WHERE `elem`.`URL` = '$url';"))
		return true;
	else
		return false;
}

function numberEnd($number, $titles) {
	$cases = array (2, 0, 1, 1, 1, 2);
	return $titles[ ($number%100>4 && $number%100<20)? 2 : $cases[min($number%10, 5)] ];
}
?>
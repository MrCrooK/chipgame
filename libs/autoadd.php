<?
require_once("/home/bitrix/ext_www/chipgame.ru/libs/phpQuery.php");
require_once("/home/bitrix/ext_www/chipgame.ru/libs/sql.php");
require_once("/home/bitrix/ext_www/chipgame.ru/libs/imgresize.php");
$rss = file_get_contents("http://www.youtube.com/trendsdashboard_ajax?action_feed_videos=1&feed=views&loc=rus&gender=--&age=--");
$elem = json_decode($rss);
$document = phpQuery::newDocument($elem->html_content);
foreach(pq('div.video-item') as $item) {
	$arID = pq($item)->attr('alt');
	$arElem = sql_query("SELECT * FROM `elem` WHERE `URL` LIKE '%{$arID}%'");
	if(!$arElem) {
		$page = file_get_contents("http://www.youtube.com/watch?v=".$arID);
		$document = phpQuery::newDocument($page);
		$text = $document->find('p#eow-description')->html();
		$text = preg_replace('#<a href=(?:.*)(?=</a>)#Usi', '', $text);
		$metaItems = array();
		foreach(pq('meta') as $meta) {
			$key = pq($meta)->attr('name');
			if(!strlen($key)) $key = pq($meta)->attr('property');
			if(!strlen($key)) $key = pq($meta)->attr('itemprop');
			$value =  pq($meta)->attr('content');
			$metaItems[$key] = $value;
		}

 		// Пробуем загрузить картинку на сервер
		$ImgName = md5($metaItems["og:image"].time());
		if(create_thumbnail($metaItems["og:image"], "/home/bitrix/ext_www/chipgame.ru/images/".$ImgName.".jpg"))
			$img = "/images/".$ImgName.".jpg";
		
		$img = $img;
		$name = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["title"])));
		$url = '/'.$arID.'.php';
		$title = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["title"])));
		$description = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["description"])));
		$keywords = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["keywords"])));
		$video = $arID;
		$text = mysql_real_escape_string(htmlspecialchars(strip_tags($text)));
		$duration = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["duration"])));
		$upload = mysql_real_escape_string(htmlspecialchars(strip_tags($metaItems["datePublished"])));
		$show = '1';
		
		// Проверяем можем ли показывать видео на сайте
		$dsb = file_get_contents("http://www.youtube.com/share_ajax?action_get_share_box=1&video_id=".$arID."&share_at=true");
		$ar = json_decode($dsb);
		$document_dsb = phpQuery::newDocument($ar->share_html); 
		$disable = $document_dsb->find('.share-panel-embed-container')->attr("data-disabled");
		if($disable=="true") $show = 0; else $show = 1;		 
		 
		// Если нет детального описания скрываем видео
		/*if(strlen($text)<10) $show = '0';*/
		
		if(add_elem($img, $name, $url, $title, $description, $keywords, $video, $text, $duration, $upload, $show))	echo date(DATE_RFC2822)." ".$arID." запись успешно добавлена.
";
		else echo date(DATE_RFC2822)." ".$arID." ошибка добавления записи.
";
		return true;
	}
	$i++;
}
if($i) echo date(DATE_RFC2822)." Все записи из списка уже добавлены
"; 
else echo date(DATE_RFC2822)." Нет записей
";
?>


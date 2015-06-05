<?
$title = "Редактирование файла";
?>
<?require_once("/home/u902562627/public_html/admin/header.php");?>
<?require_once("/home/u902562627/public_html/phpQuery.php");?>
<?require_once("/home/u902562627/public_html/sql.php");?>
<?$arElem = sql_query("SELECT * FROM  `elem` WHERE  `elem`.`URL` = '".$_GET["file"]."'");?>
<script src="ckeditor/ckeditor.js"></script>
<?
$file_handle = fopen('/home/u902562627/public_html'.$_GET["file"], "r");
while (!feof($file_handle)) {
   $line .= fgets($file_handle);
}
fclose($file_handle);

//Исполняемая область
$pos1 = stripos($line, '<?')+2;
$pos2 = stripos($line, '?>')-$pos1;
$run = substr($line, $pos1, $pos2); 
if($run) eval($run);

//Редактируемая область
$pos1 = stripos($line, '<?require_once($_SERVER["DOCUMENT_ROOT"]."/header.php");?>')+83;
$pos2 = stripos($line, '<!-- Put this script tag to the <head> of your page -->')-$pos1;
$edit = substr($line, $pos1, $pos2); 
?>
<form action="save.php" method="post" class="editform">
	<input name="url" type="hidden" value="<?=$arElem[0]["URL"]?>">
	<table width="100%" border="0" cellspacing="5" cellpadding="0">
		<tr>
			<td width="30%" align="right">Название:</td>
			<td width="70%"><input name="title" type="text" value="<?=$arElem[0]["NAME"]?>"></td>
		</tr>
		<tr>
			<td width="30%" align="right">Описание:</td>
			<td><input type="text" name="description" value="<?=$description?>"></td>
		</tr>
		<tr>
			<td width="30%" align="right">Ключевые слова:</td>
			<td><input type="text" name="keywords" value="<?=$keywords?>"></td>
		</tr>
		<tr>
			<td width="30%" align="right">Картинка:</td>
			<td><input type="text" name="img" value="<?=$arElem[0]["IMG"]?>"><?if($arElem[0]["IMG"]):?><a class="viewpic" href="<?=$arElem[0]["IMG"]?>" target="_blank">посмотреть</a><?endif?></td>
		</tr>
		<tr>
			<td width="30%" align="right">Показы:</td>
			<td><input type="text" name="COUNT" value="<?=$arElem[0]["COUNT"]?>"></td>
		</tr>
		<tr>
			<td width="30%" align="right">Активность:</td>
			<td><input type="checkbox" name="SHOW" value="Y" <?=($arElem[0]["SHOW"])?"checked":""?>></td>
		</tr>
	</table>
	<textarea cols="100" id="editor" name="editor" rows="10"><?=$edit;?></textarea><br>
	<script>CKEDITOR.replace( 'editor' , {height: '500px'});</script>
</form>
<?require_once("/home/u902562627/public_html/admin/footer.php");?>
<?
require_once("/home/u902562627/public_html/sql.php");
$file='
		<?
		$title = "'.mysql_escape_string(htmlspecialchars(strip_tags($_REQUEST["title"]))).'";
		$description="'.mysql_escape_string(htmlspecialchars(strip_tags($_REQUEST["description"]))).'";
		$keywords="'.mysql_escape_string(htmlspecialchars(strip_tags($_REQUEST["keywords"]))).'";
		$img="'.$_REQUEST["img"].'";
		?>
		<?require_once($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
			<div class="content">
			'.$_REQUEST["editor"].'
			<!-- Put this script tag to the <head> of your page -->
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

			<script type="text/javascript">
			  VK.init({apiId: 2322479, onlyWidgets: true});
			</script>

			<!-- Put this div tag to the place, where the Comments block will be -->
			<div id="vk_comments"></div>
			<script type="text/javascript">
			VK.Widgets.Comments("vk_comments", {limit: 10, width: "960", attach: "*"});
			</script>
			</div>
		<?require_once($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>
'; 
if(file_put_contents("/home/u902562627/public_html".$_REQUEST["url"],$file)&&edit_elem($_REQUEST["title"], $_REQUEST["img"], $_REQUEST["COUNT"], $_REQUEST["SHOW"], $_REQUEST["url"]))
	echo '<meta http-equiv="refresh" content="0;URL=/admin/">';
else
	echo "Произошла ошибка, попробуйте позже.";
?>
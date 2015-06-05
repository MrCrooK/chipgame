{include file="header.tpl" title="{$item.TITLE} | ChipGame" description="{$item.DESCRIPTION}" keywords="{$item.KEYWORDS}"}
			<h1>{$item.NAME}</h1>
			<div class="content" itemscope itemtype="http://schema.org/VideoObject">
				<div style="display: none">		
				<a style="display: none" itemprop="url" href="http://chipgame.ru{$item.URL}" ><h1 itemprop="name">{$item.NAME}</h1></a>
				<meta itemprop="duration" content="{$item.DURATION}">
				<meta itemprop="isFamilyFriendly" content="true">
				<span itemprop="uploadDate">{$item.UPLOAD}</span>
				<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"><img itemprop="contentUrl" src="http://chipgame.ru{$item.IMG}" ><meta itemprop="width" content="331"><meta itemprop="height" content="180"></span>
				</div>
	
				<iframe width="960" height="540" src="https://www.youtube.com/embed/{$item.VIDEO}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<p itemprop="description">{$item.TEXT}</p>
				{literal} 
				<!-- Put this script tag to the <head> of your page -->
				<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
				<script type="text/javascript">VK.init({apiId: 2322479, onlyWidgets: true});</script>
				<!-- Put this div tag to the place, where the Comments block will be -->
				<div id="vk_comments"></div>
				<script type="text/javascript">
				VK.Widgets.Comments("vk_comments", {limit: 10, width: "960", attach: "*"});
				</script>
				{/literal} 
			</div>
{include file="footer.tpl"}

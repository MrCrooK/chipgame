{include file="header.tpl" title="Видео приколы – самое смешное видео онлайн, видео приколы Ютуб | ChipGame" description="Видео приколы и самое смешное видео на сайте ChipGame! Смотри онлайн популярные видео приколы Ютуб, лучшие подборки и клипы. Приколы – лучший способ поднять настроение. Включайте видео приколы и делитесь впечатлениями с друзьями" keywords="Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб"}
{literal}<script>jQuery(function () {preload('ID')});</script>{/literal}
{foreach item=item from=$items}
	<a href="{$item.URL}" class="box">
		<div class="countnum">{$item.COUNT}</div>
		<img src="/templates/images/nopgoto.png" data-src="{$item.IMG}" alt="{$item.NAME}" width="100%">
		<h2>{$item.NAME}</h2>
	</a>
{/foreach}
{include file="footer.tpl"}

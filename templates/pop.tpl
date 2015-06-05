{include file="header.tpl" title="Популярное видео | ChipGame" description="Популярное видео на сайте ChipGame! У нас вы найдете самое популярное видео" keywords="Популярное видео, Приколы, Видео приколы, Самое смешное видео, Видео приколы Ютуб"}
{literal}<script>jQuery(function () {preload('COUNT')});</script>{/literal}
{foreach item=item from=$items}
	<a href="{$item.URL}" class="box">
		<div class="countnum">{$item.COUNT}</div>
		<img src="/templates/images/nopgoto.png" data-src="{$item.IMG}" alt="{$item.NAME}" width="100%">
		<h2>{$item.NAME}</h2>
	</a>
{/foreach}
{include file="footer.tpl"}

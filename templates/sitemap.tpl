{include file="header.tpl" title="Карта сайта | ChipGame" description="" keywords=""}
	<h1>Карта сайта</h1>
	<div class="content">
	{foreach item=item from=$items}
			<a href="{$item.URL}">{$item.NAME}</a><br>
	{/foreach}
	</div>
{include file="footer.tpl"}

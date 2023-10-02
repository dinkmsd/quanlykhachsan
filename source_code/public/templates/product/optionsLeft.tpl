<div class="Module">

	<div class="tabGray"><b>{#BRAND2#}</b></div>
	{foreach from=$aProductor item=item name=partner}
	{assign var=id value=$item.id}
	{assign var=title value=$item.name}
	<div class="cate{if $smarty.foreach.partner.last}End{/if}">
		<div class="padding" align="center">
			<a href="{$smarty.const.SITE_URL}{"index.php?mod=search&productor=$id&$title.html"|url_friendly}"><img src="{$smarty.const.SITE_URL}upload/productor/{$item.image}"  border="0"/></a>
		</div>
	</div>
	{/foreach}	
				
</div>
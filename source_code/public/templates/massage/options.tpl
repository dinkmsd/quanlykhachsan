<div class="Module">
		{if $aOptions}
	<div class="tabGray"><b>{#BRAND#}</b></div>		
	
	<div class="clr"></div>

	
	<div class="cate" style="padding-top:5px;">{if $aProductor}<b>&nbsp;&nbsp;{#BRAND2#}</b>{/if}<div class="padding" style="line-height:22px;">
	
	{foreach from=$aProductor item=item name=partner}
	{assign var=id value=$item.id}
	{assign var=title value=$item.name}
	
		<div class="padding" style="float:left; width:60px; margin-bottom:10px;">
			<a href="{$smarty.const.SITE_URL}{"index.php?mod=search&gid=$gid&productor=$id&$title.html"|url_friendly}"><img src="{$smarty.const.SITE_URL}upload/productor/{$item.image}"  border="0" style="width:60px;" /></a>
		</div>
			
	{/foreach}	
	
		<div class="clr"></div>
	{foreach from=$aOptions item=item name=opt}				
			<b>{$item.title}</b>
			{foreach from=$item.options item=item}			
			{assign var=v value=$item.attribute_value}
			<div class="level-2" style="padding-left:10px;">
			- <a href="{$smarty.const.SITE_URL}{"index.php?mod=search&gid=$gid"|url_friendly}?att={$v}">{$item.attribute_value}</a> ({$item.counter})
			</div>
			{/foreach}
				
	{/foreach}
	</div></div>
	{/if}						
</div>
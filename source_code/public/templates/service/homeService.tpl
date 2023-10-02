				<div class="Module FloatLeft-50">
					<div class="tabBlue">					
						<b>{#SERVICE#}</b>
					</div>
					<div class="borderModule">
					{foreach from=$aHomeService item=item name=homeService}
					{assign var=id value=$item.id}
					{assign var=title value=$item.title}
					{if $smarty.foreach.homeService.index==0}
						<a href="{$smarty.const.SITE_URL}{"index.php?mod=service&id=$id&$title.html"|url_friendly}"><img src="{$smarty.const.SITE_URL}upload/service/{$item.image}"  width="275" style="border:1px solid #ccc; display:block;"/></a>
						<div class="clr"></div>
					{else}
						<div class="otherHome"><a href="{$smarty.const.SITE_URL}{"index.php?mod=service&id=$id&$title.html"|url_friendly}">{$title}</a></div>
					{/if}
					{/foreach}
					</div>
				</div>	
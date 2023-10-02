				<div class="Module">
					<div class="tabBlue">
					<div class="left">
					<div class="right">
						<b>{#SERVICE#}</b>
					</div>
					</div>
					</div>
					
					{foreach from=$aService item=item}
					{assign var=id value=$item.id}
					<div class="tabCat">
					<div class="left">
					<div class="right">
					<div class="center">
						<a href="{$smarty.const.SITE_URL}{"index.php?mod=service&task=view&id=$id"|url_friendly}"  {if $smarty.get.mod=='service'&& $smarty.get.id==$id} class="selectTab"{/if} title="{$item.title}">{$item.title|truncate_string:35}</a>
					</div>
					</div>
					</div>
					</div>
					{/foreach}					
				</div>
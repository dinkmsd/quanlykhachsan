				<div class="Module FloatRight-50">
					<div class="tabBlue">					
						<b>{#HOT_PROJECT#}</b>
					</div>
					<div class="borderModule">
					{foreach from=$aHomeProject item=item name=homeProject}
					{assign var=id value=$item.id}
					{assign var=title value=$item.title}
					{if $smarty.foreach.homeProject.index==0}
						<a href="{$smarty.const.SITE_URL}{"index.php?mod=project&task=view&id=$id&$title.html"|url_friendly}"><img src="{$smarty.const.SITE_URL}upload/project/{$item.image}"  width="275" style="border:1px solid #ccc; display:block;"/></a>
						<div class="clr"></div>
					{else}
						<div class="otherHome"><a href="{$smarty.const.SITE_URL}{"index.php?mod=project&task=view&id=$id&$title.html"|url_friendly}">{$title}</a></div>
					{/if}
					{/foreach}						
					</div>
				</div>	
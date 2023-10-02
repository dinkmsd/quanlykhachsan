				<div class="Module">
					<div class="tabGray"><b>{#product_category#}</b></div>
					{foreach from=$aProCategory item=item name=productCategory}
					{assign var=id value=$item.Group_ID}
					{assign var=gname value=$item.Group_Name}
					{assign var=pLeft value=$item.level*10+5}
					<div class="cate{if $smarty.foreach.productCategory.last}End{/if} {$item.class|default:'hided'}">
						<div class="padding level-{$item.level}" style="padding-left:{$pLeft}px">
							<div class="{if $item.level>0}cat-list{/if}"><a href="{$smarty.const.SITE_URL}{"index.php?mod=product&gid=$id&$gname.html"|url_friendly}">{$gname}</a></div></div>
					</div>
					{/foreach}									
				</div>
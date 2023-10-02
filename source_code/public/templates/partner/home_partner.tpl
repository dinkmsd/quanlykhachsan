				<div class="Module">
					<div class="tabGray"><b>{#partner#}</b></div>
					{foreach from=$aPartner item=item name=partner}
					<div class="cate{if $smarty.foreach.partner.last}End{/if}">					
						<div class="padding" align="center">
							<a href="{$item.Partner_Link}" {if $item.Partner_Photo} target="_blank"{/if}><img src="{$smarty.const.SITE_URL}upload/partner/{$item.Partner_Photo}"  border="0"/></a>
						</div>
					</div>
					{/foreach}							
				</div>
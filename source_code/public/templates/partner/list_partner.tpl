					<div class="Module">
						<div class="tabBlue">
						<div class="left">
						<div class="right">
							<b>{#PARTNER#}</b>
						</div>	
						</div>							
						</div>
						
						<div class="cornerContent">
						<div class="top"><div class="left"><div class="right"></div></div></div>
						<div class="contentTab">
							<div style="padding:5px 10px 5px 10px;">
								{foreach from=$aPartners item=item}
								{assign var=id value=$item.id}
									<div style="float:left; width:100%; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #999;">
										<div class="Title"><a href="{$item.Partner_Link}" target="_blank">{$item.Partner_Name}</a></div>
										{if $item.Partner_Photo!=''}
										<span style="float:left;text-align:center; padding:0px; background-color:#161616; margin:0px 10px 10px 0; border:1px solid #444;">
											<a href="{$item.Partner_Link}"  target="_blank">
											<img src="{$smarty.const.SITE_URL}upload/partner/{$item.Partner_Photo}" width="100" style="display:block;" border="0" title="{$item.title}"/></a>
										</span>
										{/if}
										<div>{$item.Partner_Summary}</div>
									</div>
									<div class="clr"></div>
								{/foreach}	
	
								{if $sPaging!=''}<div class="paging" align="center">{$sPaging}</div>{/if}
							</div>
						</div>	
						<div class="bottom"><div class="left"><div class="right"></div></div></div>
						</div>
						
						<div class="bottom">
						<div class="left">
						<div class="right">
						</div>
						</div>
						</div>
					</div>
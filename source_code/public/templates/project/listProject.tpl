					<div class="Module">
						<div class="tabBlue">
						<div class="left">
						<div class="right">
							<b>{#PROJECT#}</b>
						</div>	
						</div>							
						</div>
						
						<div class="cornerContent">
						<div class="top"><div class="left"><div class="right"></div></div></div>
						<div class="contentTab">
							<div style="padding:5px 10px 5px 10px;">
								{foreach from=$aProjects item=item}
								{assign var=id value=$item.id}
									<div style="float:left; width:100%; margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #ccc;">
										<div class="Title"><a href="{$smarty.const.SITE_URL}{"index.php?mod=project&task=view&id=$id"|url_friendly}">{$item.title}</a></div>
										<div class="dateTime">{$item.create_date}</div>
										{if $item.image!=''}
										<span style="float:left;text-align:center; padding:0px; background-color:#161616; margin:0px 10px 10px 0; border:1px solid #444;">
											<a href="{$smarty.const.SITE_URL}{"index.php?mod=project&task=view&id=$id"|url_friendly}">
											<img src="{$smarty.const.SITE_URL}upload/project/thumbnail/{$item.image}" width="100" style="display:block;" border="0" title="{$item.title}"/></a>
										</span>
										{/if}
										<div>{$item.summary}...<a href="{$smarty.const.SITE_URL}{"index.php?mod=project&task=view&id=$id"|url_friendly}" class="readmore">{#readmore#}</a></div>
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
<div class="Module">
						<div class="tabBlue">						
							<b>{$aGroupDownload[$smarty.get.gid]}</b>									
						</div>
						
						<div class="borderModule">
								{foreach from=$aItemDownloads item=item name=download}
								{assign var=id value=$item.id}
								{assign var=title value=$item.title}
									<div class="floatLeft-100" style="margin-bottom:10px; padding-bottom:10px; border-bottom:1px dashed #ccc;">
										<div class="Title"><a href="{$smarty.const.SITE_URL}{"index.php?mod=download&id=$id&$title.html"|url_friendly}">{$item.title}</a></div>
										<div class="dateTime">{$item.create_date}</div>
										{if $item.filename!=''}
										<span style="float:left;text-align:center; padding:0px; background-color:#161616; margin:0px 10px 10px 0; border:1px solid #444;">
											<a href="{$smarty.const.SITE_URL}{"index.php?mod=download&task=view&id=$id&$title.html"|url_friendly}">
											<img src="{$smarty.const.SITE_URL}upload/download/thumbnail/{$item.filename}" width="120" style="display:block;" border="0" title="{$item.title}"/></a>
										</span>
										{/if}
										<div>{$item.summary}...<a href="{$smarty.const.SITE_URL}{"index.php?mod=download&id=$id&$title.html"|url_friendly}" class="readmore">{#readmore#}</a></div>
									</div>
									<div class="clr"></div>
								{/foreach}	
	
								{if $sPaging!=''}<div class="paging" align="center">{$sPaging}</div>{/if}
													
						</div>						
					</div>
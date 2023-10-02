					<div class="Module">
						<div class="tabBlue">						
						<b>{$aDownload.title}</b>																		
						</div>
						
						<div class="borderModule">
							<div style="float:left; width:100%; margin-bottom:10px; padding-bottom:10px;">
								<div class="Title"><a href="#" style="font-family:Verdana;font-size:16px; text-decoration:none;">{$aDownload.title}</a></div>
								<div class="dateTime">{$aDownload.create_date}</div>
								<br>
								<p>{$aDownload.content}</p>
								<br><br>
								<div align="right"><a href="#" onclick="window.history.go(-1); return false;" class="readmore">{#back#}</a>&nbsp;&nbsp;
								<a href="#" class="readmore">{#top#}</a></div>
								
								{if $aOthers}
								<div class="titleOther">{#other_news#}</div>
								<ul class="other">
								{foreach from=$aOthers item=other}
								{assign var=oId value=$other.id}
									<li><a href="{$smarty.const.SITE_URL}{"index.php?mod=download&task=view&id=$oId"|url_friendly}">{$other.title}</a></li>
								{/foreach}
								</ul>
								{/if}
							</div>
							<div class="clr"></div>							
						</div>
					</div>
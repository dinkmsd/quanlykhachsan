				<div class="Module BgBlue">
					<div class="top"><div class="left"><div class="right"></div></div></div>
					<div class="center">
					<div style="padding:5px 4px 1px 10px;">
						<b style="display:block; color:#fff; text-transform:uppercase; margin-bottom:8px;">{#NEWS#}</b>
						{foreach item=item from=$aLatestNews}
						{assign var=id value=$item.id}
						{assign var=title value=$item.title}
						<div class="font-11" style="margin-top: 1px;">
						<a href="{$smarty.const.SITE_URL}{"index.php?mod=news&task=view&id=$id&$title.html"|url_friendly}" class="colorWhite">
							<table border="0" valign="top">
							<tr>
							<td valign="top" style="width: 40px; valign: top;">
							<img src="{$smarty.const.SITE_URL}upload/news/{$item.image}"  title="{$item.title}" style="margin-top: 0px; valign: top;" align="left" VALIGN="TOP" border="0" width="40" height="40"/>
							</td>
							<td style="margin-top: 0px;">									
							{$item.title|truncate:66}
							</td>
							</tr>
							</table>
						</a>
						</div>
						{/foreach}
					</div>
					</div>
					<div class="bottom"><div class="left"><div class="right"></div></div></div>					
				</div>
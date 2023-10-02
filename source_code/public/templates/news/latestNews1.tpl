				<div class="Module BgBlue">
					<div class="top"><div class="left"><div class="right"></div></div></div>
					<div class="center">
					<div style="padding:5px 4px 1px 10px;">
						<b style="display:block; color:#fff; text-transform:uppercase; margin-bottom:8px;">{#NEWS#}</b>
						{foreach item=item from=$aLatestNews}
						{assign var=id value=$item.id}
						{assign var=title value=$item.title}
						<div class="font-11 catNews"><a href="{$smarty.const.SITE_URL}{"index.php?mod=news&task=view&id=$id&$title.html"|url_friendly}" class="colorWhite">{$item.title}</a></div>
						{/foreach}
					</div>
					</div>
					<div class="bottom"><div class="left"><div class="right"></div></div></div>					
				</div>
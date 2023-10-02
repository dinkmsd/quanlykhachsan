<div class="Module">	
	<div class="tabBlue">
	<div class="left">
	<div class="right">
		<b>{#NEWS#}</b>		
	</div>
	</div>
	</div>
	
	<div class="cornerContent" style="margin-top:5px;">
		<div class="top"><div class="left"><div class="right"></div></div></div>
		<div class="contentTab">
			<div style="padding:5px 10px 5px 10px;">
				
				<div style="float:left; width:100%;">
					{if $aHomeNews.image !=''}
					<a href="{$smarty.const.SITE_URL}{"index.php?mod=news&task=view&id=$id"}"><img src="{$smarty.const.SITE_URL}upload/news/{$aHomeNews.image}"  title="{$photo.title}" align="left" border="0" style="margin:0 10px 10px 0;" width="80"/></a>
					{/if}
					<div style="font-size:11px; text-align:justify; color:#1B4A6D">
						{$aHomeNews.summary} khong co gi quy hon doc lap tu do hanh phuc
					</div>									
					<div class="clr"></div>
				</div>				
				<div class="clr"></div>
			</div>
		</div>
		<div class="bottom"><div class="left"><div class="right"></div></div></div>
	</div>
</div>
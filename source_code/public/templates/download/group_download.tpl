				<div class="Module">
					<div class="tabGray"><b>{#download#}</b></div>
					{foreach from=$aGroupDownload item=gname key=id name=groupDownload}
					<div class="cate{if $smarty.foreach.groupDownload.last}End{/if}">
						<div class="padding level-0" style="padding-left:5px">
							<div><a href="{$smarty.const.SITE_URL}{"index.php?mod=download&gid=$id&$gname.html"|url_friendly}">{$gname}</a></div></div>
					</div>
					{/foreach}									
				</div>
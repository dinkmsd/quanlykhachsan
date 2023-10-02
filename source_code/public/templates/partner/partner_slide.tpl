<script type="text/javascript" src="{$smarty.const.SITE_URL}lib/jquery/plugin/jqnews/js/jqNewsOrizzontal.js"></script>
<link rel="stylesheet" href="{$smarty.const.SITE_URL}lib/jquery/plugin/jqnews/css/jqnewsoriz.css" />
			<div class="Partner">
				<div class="left"><div class="right">				
				<div class="top"><div class="bottom">
				<table width="100%" border="0" style="height:100%;" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="220" valign="top" align="center">
						<div class="PartTitle" >
							<div class="left"><div class="right">
								<label style="text-transform:uppercase; color:#1B4A6D;">{#PARTNER#}</label>
							</div></div>
						</div>
					<a class="prePhoto" onclick="preItem(); return false;" href="#"><img src="{$smarty.const.SITE_URL}themes/default/images/pre-part.jpg" style="margin:15px 5px;" border="0" /></a>
					<a href="#" class="nextPhoto" onclick="nextItem(); return false;"><img src="{$smarty.const.SITE_URL}themes/default/images/next-part.jpg" style="margin:15px 5px;" border="0" /></a></td>
					<td valign="middle" style=" padding:10px 0 10px;">
						<div id="jqnews">
						{foreach from=$aAdvert item=row name=slide}
							<label><a href="{$row.Partner_Link}" {if $row.Partner_Link!=''}target="_blank"{/if}><img  title="{$row.Partner_Name}" src="{$smarty.const.SITE_URL}/upload/partner/{$row.Partner_Photo}" border="0"  style="max-height:87px; width:175px;" /></a></label>
						{/foreach}
						</div>
					</td>
				  </tr>
				</table>
				</div></div>
				</div></div>
			</div>			
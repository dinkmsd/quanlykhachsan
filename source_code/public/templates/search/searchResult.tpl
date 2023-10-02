
					 <h2 class="bigTitle">{#search_result#}</h2>
					
					
					<form name="formSearch" class="form_search" method="GET" action="{"index.php?mod=search"|url_friendly}">
					<table cellpadding="5" cellspacing="0" border="0">
						<tr>
							<td valign="middle" align="left"><b>{#keyword#}</b>: <input style="width:150px; height:20px;" type="text"  name="keyword" value="{$smarty.get.keyword}" ></td>
							<td valign="middle" align="left">&nbsp;&nbsp;&nbsp; <b>{#category#}</b>: 
							{html_options options=$aCate name=gid selected=$smarty.get.gid}</td>
							<td align="left"><a href="#" class="button" onclick="formSearch.submit(); return false;"> {#search#}</a></td>
						</tr>
					</table>
					{if $smarty.get.att!=''}<input type="hidden" name="att" value="{$smarty.get.att}">{/if}
					{if $smarty.get.productor!=''}<input type="hidden" name="productor" value="{$smarty.get.productor}">{/if}
					</form>
            <div style="width:600px">
						
        {foreach from=$aResult item=item name=hotPro}
        {assign var=id value=$item.Product_ID}
        {assign var=title value=$item.Product_Title}
        {assign var=rate_vn value=$item.Product_Price*$rate}
            
            	<div class="listProductItem">
                    <div class="listProductImage">
                        <a href="{"index.php?mod=product&task=view&id=$id&$title"|url_friendly}"><div class="priceTag">{$item.Product_Price}</div><img src="upload/product/{$item.Product_Photo}" /></a>
                    </div>
                    <div class="listProductInfo">
                        <a href="{"index.php?mod=product&task=view&id=$id&$title"|url_friendly}">{$item.Product_Title}</a>
                        
                        {$item.Product_Summary}
                        <a href="{"index.php?mod=product&task=view&id=$id&$title"|url_friendly}" class="listProductMore">Thông tin chi tiết</a>
                    </div>
                </div>
 {/foreach} 
                 <div class="clr"></div>
</div>              
					{if $sPaging}<div class="page">{$sPaging}</div>{/if}
					

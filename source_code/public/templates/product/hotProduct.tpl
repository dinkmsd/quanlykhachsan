            <a href="{"index.php?mod=product"|url_friendly}"><h2 class="bigTitle">Buồng phòng</h2></a>
            <div style="width:600px" class="bottomBorder">
 					
					{foreach from=$aHotProduct item=item name=hotPro}
					{assign var=id value=$item.Product_ID}
					{assign var=tit value=$item.Product_Title}
					{assign var=rate_vn value=$item.Product_Price*$rate}
           	<div class="homeProductItem">
                    <div class="homeProductImage">
                       {if $item.Product_Photo}
                        <a href="{$smarty.const.SITE_URL}buongphong/{$id}/{$tit|remove_marks}.html"><img src="upload/product/thumbnail/{$item.Product_Photo}" /></a>
                        {/if}
                    </div>
                    <div class="homeProductInfo">
                        <a href="{$smarty.const.SITE_URL}buongphong/{$id}/{$tit|remove_marks}.html">{$item.Product_Title}</a>
                        <div class="priceTag">{$item.Product_Price}</div>
                        <p>{$item.Product_Summary}<a href="{$smarty.const.SITE_URL}buongphong/{$id}/{$tit|remove_marks}.html" style="display:block; float:right">Xem tiếp</a></p>
                    </div>
                </div>
                {/foreach}
            	
                
            </div>


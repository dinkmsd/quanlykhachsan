            <a href="{"index.php?mod=massage"|url_friendly}"><h2 class="bigTitle">Massage</h2></a>
            <div style="width:600px" class="bottomBorder">
 					
					{foreach from=$aHotMassage item=item name=hotPro}
					{assign var=id value=$item.Product_ID}
					{assign var=rate_vn value=$item.Product_Price*$rate}
           	<div class="homeProductItem">
                    <div class="homeProductImage">
                       {if $item.Product_Photo}
                        <a href="{"index.php?mod=massage&task=view&id=$id"|url_friendly}"><img src="upload/message/thumbnail/{$item.Product_Photo}" /></a>
                        {/if}
                    </div>
                    <div class="homeProductInfo">
                        <a href="{"index.php?mod=massage&task=view&id=$id"|url_friendly}">{$item.Product_Title}</a>
                        <div class="priceTag">{$item.Product_Price}</div>
                        <p>{$item.Product_Summary}</p>
                    </div>
                </div>
                {/foreach}
            	
                
            </div>


            <h2 class="bigTitle">Message</h2>
            <div style="width:600px">
        {foreach from=$aProducts item=item name=hotPro}
        {assign var=id value=$item.Product_ID}
        {assign var=title value=$item.Product_Title}
        {assign var=rate_vn value=$item.Product_Price*$rate}
            
            	<div class="listProductItem">
                    <div class="listProductImage">
                        <a href="{"index.php?mod=massage&task=view&id=$id&$title"|url_friendly}"><div class="priceTag">{$item.Product_Price}</div><img src="upload/message/{$item.Product_Photo}" /></a>
                    </div>
                    <div class="listProductInfo">
                        <a href="{"index.php?mod=massage&task=view&id=$id&$title"|url_friendly}">{$item.Product_Title}</a>
                        
                        {$item.Product_Summary}
                        <a href="{"index.php?mod=massage&task=view&id=$id&$title"|url_friendly}" class="listProductMore">Thông tin chi tiết</a>
                    </div>
                </div>
 {/foreach}               
                
            	
                <div class="clr"></div>
            </div>
{if $sPaging}<div class="page" align="center">{$sPaging}</div>{/if}

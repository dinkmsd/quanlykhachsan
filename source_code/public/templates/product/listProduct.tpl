            <h2 class="bigTitle">Buồng phòng</h2>
            <div style="width:600px">
        {foreach from=$aProducts item=item name=hotPro}
        {assign var=id value=$item.Product_ID}
        {assign var=title value=$item.Product_Title}
        {assign var=rate_vn value=$item.Product_Price*$rate}
            
            	<div class="listProductItem">
                    <div class="listProductImage">
                        <a href="{"index.php?mod=product&task=view&id=$id&$title"|url_friendly}"><div class="priceTag">{$item.Product_Price|number_format:0:".":"."} VNĐ</div><img src="upload/product/{$item.Product_Photo}" /></a>
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
{if $sPaging}<div class="page" align="center">{$sPaging}</div>{/if}

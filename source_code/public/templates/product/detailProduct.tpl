         <div class="path">
            {foreach from=$aPath item=item}
            {if $item.link}<a href="{$item.link}" title="{$item.title}">{$item.title}</a>{else}{$item.title}{/if}
            {/foreach}
        </div>

            <h2 class="newsDetailsTitle">{$aProduct.Product_Title}</h2>
            {assign var=tit value=$aProduct.Product_ID}
            <div id="galleria">
                {foreach from=$aProductPhotos item=photo}
                <a href="{$smarty.const.SITE_URL}upload/product/{$photo.image}" >
                <img src="{$smarty.const.SITE_URL}upload/product/thumbnail/{$photo.image}"></a>
                {/foreach}
                
            </div>
            <div class="bottomBorder" style="height:25px;"></div>
                <ul class="roomDetailsInfo">
                {foreach from=$aProduct.options item=att name=foo}
                {assign var=stt value=$smarty.foreach.foo.index+1}
               <li>{$att.title}:{if $att.attribute_value=='on'}Có{else}{$att.attribute_value}{/if}</li>
              
                {/foreach}
                </ul>
            <div class="clr"></div>
            <div class="roomDetailsPrices">
                <div class="priceTag" style="margin:2px 0 0;">{$aProduct.Product_Price}</div>
                <a href="{"index.php?mod=cart&task=send_request&room=$tit"}"  style="margin:0 0 0 10px;" class="viewMore fl">Đặt phòng</a>
                <div class="clr"></div>
            </div>
            <p class="roomDetailsContent">{$aProduct.Product_Content}</p>
            <div class="clr"></div>
            <div class="bottomBorder" style="height:25px;"></div>           
            <h2 class="bigTitle">Các phòng khác</h2>  
            <ul class="relatedContent">
{foreach from=$aOthers item=item name=other}
{assign var=id value=$item.Product_ID}
{assign var=title value=$item.Product_Title}
{assign var=tit value=$item.Product_Title}
                <li><a href="{$smarty.const.SITE_URL}buongphong/{$id}/{$tit|remove_marks}.html">{$title}</a></li>
{/foreach}
            </ul>                      
{literal}<script>
                Galleria.loadTheme('themes/default/js/galleria.classic.min.js');
                $('#galleria').galleria({
                        extend: function() {
                        this.play(2000); // will advance every 4th second
                        }
                }); 

</script>{/literal}     
        
        
        
        

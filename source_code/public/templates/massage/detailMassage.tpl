         <div class="path">
            {foreach from=$aPath item=item}
            {if $item.link}<a href="{$item.link}" title="{$item.title}">{$item.title}</a>{else}{$item.title}{/if}
            {/foreach}
        </div>

            <h2 class="newsDetailsTitle">{$aMassage.Product_Title}</h2>
            <div id="galleria">
                {foreach from=$aMassagePhotos item=photo}
                <a href="{$smarty.const.SITE_URL}upload/message/{$photo.image}" >
                <img src="{$smarty.const.SITE_URL}upload/message/thumbnail/{$photo.image}"></a>
                {/foreach}
                
            </div>
            <div class="bottomBorder" style="height:25px;"></div>
                <ul class="roomDetailsInfo">
                {foreach from=$aMassage.options item=att name=foo}
                {assign var=stt value=$smarty.foreach.foo.index+1}
               <li>{$att.title}:{if $att.attribute_value=='on'}Có{else}{$att.attribute_value}{/if}</li>
              
                {/foreach}
                </ul>
            <div class="clr"></div>
            <div class="roomDetailsPrices">
               <div class="priceTag" style="margin:2px 0 0;">{$aMassage.Product_Price}</div>
                <a href="#"  style="margin:0 0 0 10px;" class="viewMore fl">Đặt phòng</a>
                <div class="clr"></div>
            </div>
            <p class="roomDetailsContent">{$aMassage.Product_Content}</p>
            <div class="clr"></div>
            <div class="bottomBorder" style="height:25px;"></div>           
            <h2 class="bigTitle">Các phòng khác</h2>  
            <ul class="relatedContent">
{foreach from=$aOthers item=item name=other}
{assign var=id value=$item.Product_ID}
{assign var=title value=$item.Product_Title}
                <li><a href="{"index.php?mod=message&task=view&id=$id&$title"|url_friendly}">{$title}</a></li>
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
        
        
        
        

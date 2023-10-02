         <div class="path">
            {foreach from=$aPath item=item}
            {if $item.link}<a href="{$item.link}" title="{$item.title}">{$item.title}</a>{else}{$item.title}{/if}
            {/foreach}
        </div>
           <h2 class="newsDetailsTitle">{$aAbout.About_Title}</h2>
            <div class="newsDetailsContent bottomBorder">
               {$aAbout.About_Content}
            </div>
            

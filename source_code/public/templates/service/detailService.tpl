<div class="colLeft fl">
            <h2 class="newsDetailsTitle">{$detailService.title}</h2>
            <span class="newsDetailsDesc">Last Updated:{$detailService.create_date}</span>
            <div class="newsDetailsContent bottomBorder">
              {$detailService.content} 
            </div>
            
            <h2 class="bigTitle">Tin bài liên quan</h2>
            <ul class="relatedContent">
            {foreach from=$aOtherService item=other}
            {assign var=oId value=$other.id}
                <li><a href="{$smarty.const.SITE_URL}{"index.php?mod=service&task=view&id=$oId"|url_friendly}">{$other.title}</a></li>
            {/foreach}
            </ul>
        </div>
        
        




<div class="colLeft fl">
            <h2 class="newsDetailsTitle">{$aNews.title}</h2>
            <span class="newsDetailsDesc">Last Updated:{$aNews.create_date}</span>
            <div class="newsDetailsContent bottomBorder">
              {$aNews.content} 
            </div>
            
            <h2 class="bigTitle">Tin bài liên quan</h2>
            <ul class="relatedContent">
            {foreach from=$aOthers item=other}
            {assign var=oId value=$other.id}
            {assign var=name value=$other.title}
                <li><a href="{$smarty.const.SITE_URL}tin-tuc/{$oId}/{$name|remove_marks}.html">{$other.title}</a></li>
            {/foreach}
            </ul>
        </div>
        
        


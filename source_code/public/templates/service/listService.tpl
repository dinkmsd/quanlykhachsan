<div class="colLeft fl">
            <h2 class="bigTitle">Các dịch vụ khác</h2>
								{foreach from=$aService item=item}
								{assign var=id value=$item.id}
								{assign var=title value=$item.title}
								{assign var=tit value=$item.title}
            
            <div class="newListItem bottomBorder">
                <div class="newListImage fl">
                     <a href="{$smarty.const.SITE_URL}dichvu/{$id}/{$tit|remove_marks}.html">
                     <img src="upload/service/{$item.image}" alt="photo" /></a>
                </div>
                <div class="newListContent">
                    <a href="{$smarty.const.SITE_URL}dichvu/{$id}/{$tit|remove_marks}.html">{$title}</a>
                    <div style="float:left; width:100%;font-size: 11px;
text-transform: uppercase;
color: #A31C1A; padding-top:5px;">Ngày đăng: {$item.create_date}</span></div>
                   <div style="float:left; width:100%; padding-top:5px; height:75px; overflow:hidden">{$item.summary}</div>
                </div>
            </div>
            
            
            
            
             
            
  {/foreach}          
            
								{if $sPaging!=''}<div class="page">{$sPaging}</div>{/if}
        </div>
        


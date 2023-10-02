<link href="{$smarty.const.SITE_URL}lib/jquerylightbox/css/jquery.lightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{$smarty.const.SITE_URL}lib/jquerylightbox/js/jquery.lightbox.js"></script>
{literal}
<script type="text/javascript">
	$(function() {
        $('.lightbox').lightBox();
    });
</script>
{/literal}
					<div class="Module">
						<div class="tabBlue">
							<b>{#Warranty#}</b>
						</div>
						
						<div class="borderModule">
							<div style="float:left; width:100%;">
							<div class="Title"><a href="#" style="font-family:Verdana;font-size:16px; text-decoration:none;">{$detailItem.title}</a></div>
							<div class="dateTime">{$detailItem.create_date}</div>
							<br>
							<p>{$detailItem.content}</p>
							<br><br>
							<div align="right"><a href="#" onclick="window.history.go(-1); return false;" class="readmore">{#back#}</a>&nbsp;&nbsp;
								<a href="#" class="readmore">{#top#}</a></div>
							
							{if $aOthers}
							<div class="titleOther">{#other_warranty#}</div>
							<ul class="other">
								{foreach from=$aOthers item=item}
								{assign var=id value=$item.id}
								{assign var=title value=$item.title}
									<li><a href="{$smarty.const.SITE_URL}{"index.php?mod=warranty&task=view&id=$id&$title.html"|url_friendly}">{$item.title}</a></li>
								{/foreach}
							</ul>
							{/if}
							</div>
							<div class="clr"></div>
						</div>
					</div>

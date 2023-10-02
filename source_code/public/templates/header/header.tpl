<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="verify-v1" content="+8LX/nqxE+1iH51ahRgNQdlvQoAFM+AvzmqFQf5nuUE=" >
<title>{$aPageinfo.title}</title>
<meta name="description" content="{$aPageinfo.description}" />
<meta name="keywords" content="{$aPageinfo.keyword}" />
<base href="{$smarty.const.SITE_URL}" />
<link rel="stylesheet" href="themes/{$smarty.session.theme}/home.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="themes/default/js/galleria-1.2.6.min.js"></script>
<script type="text/javascript" src="themes/default/js/coin-slider.min.js"></script>
<script type="text/javascript" src="validate.js"></script>
<link rel="stylesheet" href="themes/default/coin-slider-styles.css" type="text/css" />
{literal}<script type="text/javascript" charset="utf-8">
//<![CDATA[
	var SITE_URL='{/literal}{$smarty.const.SITE_URL}{literal}';
   $(document).ready(function() {
		$('#coinSlider').coinslider({
				width: 960, // width of slider panel
				height: 400, // height of slider panel
				spw: 8, // squares per width
				sph: 6, // squares per height
				delay: 3000, // delay between images in ms
				sDelay: 30, // delay beetwen squares in ms
				opacity: 0.70, // opacity of title and navigation
				titleSpeed: 500, // speed of title appereance in ms
				effect: '', // random, swirl, rain, straight
				navigation: true, // prev next and buttons
				links : true, // show images as links
				hoverPause: true // pause on hover
			
			});
				
			//Focus textbox
			$('.inputLabel').each(function(){
				this.value = $(this).attr('title');
				$(this).focus(function(){
				if(this.value == $(this).attr('title')) {
				this.value = '';
				}
				});
				$(this).blur(function(){
				if(this.value == '') {
				this.value = $(this).attr('title');
				}
			});
		});
	});
	//]]>	
</script>{/literal}

<link rel="stylesheet" href="themes/default/menu/queryslidemenu.css" type="text/css" />
<script type="text/javascript" src="themes/default/menu/jqueryslidemenu.js"></script>
</head>
<body>
<div class="all">
        <!--HEADER-->
        <div class="header">
            <div class="logo"><a href="{$smarty.const.SITE_URL}"><img src="themes/default/images/logo1.png" alt="photo" /></a></div>
            <!--Quang cao canh logo-->
            <div class="fr">
	
                <div class="language fr">
                    <div class="homeSearch">
                        <form method="get" action="{"index.php?mod=search"|url_friendly}">
                        <input type="text" class="homeSearchText inputLabel"  name="keyword" title="Search keyword..." />
                        <input type="submit" class="homeSearchButton" value="" />
                        </form>
                    </div>
                	 <a href="{"index.php?lang=Vietnamese"|url_friendly}"><img src="themes/default/img/VN.png" alt="photo" /></a>
                	 <a href="{"index.php?lang=English"|url_friendly}"><img src="themes/default/img/UK.png" alt="photo" /></a>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        
        <!--MENU-->
        <div id="myslidemenu" class="jqueryslidemenu headerMenu">
            <ul class="topMenu">
                <li><a href="{$smarty.const.SITE_URL}">{#HOME#}</a></li>
                <li{if $smarty.get.mod=='product'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}buongphong.html">{#sanpham#}</a>
                <!--{if $aBuongphong}
                    <ul class="subMenu">
                        {foreach from=$aBuongphong item=item}
                        {assign var=id value=$item.Group_ID}
                        {assign var=name value=$item.Group_Name}
                        <li><a href="{"index.php?mod=product&gid=$id&$name"|url_friendly}">{$name}</a></li>
                        {/foreach}
                    </ul>
                {/if}-->
                </li>
                
                <li {if $smarty.get.mod=='service'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}dichvu.html">{#dichvu#}</a></li>
                <li {if $smarty.get.mod=='news'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}tintuc.html">{#tintuc#}</a>
                {if $aNews}
                    <ul class="subMenu">
                        {foreach from=$aNews item=item}
                        {assign var=id value=$item.Group_ID}
                        {assign var=name value=$item.Group_Name}
                        <li><a href="{$smarty.const.SITE_URL}tintuc/{$id}/{$name|remove_marks}.html">{$name}</a></li>
                        {/foreach}
                    </ul>
                {/if}
                </li>
                <li {if $smarty.get.mod=='gallery'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}thuvien.html">{#thuvien#}</a></li>
                <li {if $smarty.get.mod=='about'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}gioithieu.html">{#ABOUT#}</a></li>
                <li {if $smarty.get.mod=='contact'} class="selected"{/if}><a href="{$smarty.const.SITE_URL}lienhe.html">{#lienhe#}</a></li>
            </ul>
		</div>
        <div class="content">
{if !$smarty.get.mod}{loadModule name=slideshow}{/if}

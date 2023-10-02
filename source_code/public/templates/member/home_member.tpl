<!--
  jCarousel library
-->
<script type="text/javascript" src="{$smarty.const.SITE_URL}/lib/jquery/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_URL}/lib/jquery/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_URL}/lib/jquery/jcarousel/skins/tango/skin.css" />
{literal}
<script type="text/javascript">

function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarouse2').jcarousel({
        auto: 2,
        wrap: 'last',
		 vertical: true,
        initCallback: mycarousel_initCallback
    });
});


</script>
	{/literal}
				<div class="Module">
					<div class="tabGray"><b>{#member#}</b></div>
					<div class="cateEnd">
					<div class="padding" align="center">
					<ul id="mycarouse2" class="jcarousel jcarousel-skin-tango">
					{foreach from=$aMembers item=item}
					{assign var=id value=$item.id}
					{assign var=title value=$item.title}
							<li><a href="{$smarty.const.SITE_URL}{"index.php?mod=member&id=$id&$title.html"|url_friendly}"><img src="{$smarty.const.SITE_URL}upload/member/thumbnail/{$item.image}"  border="0"/></a></li>
						
					{/foreach}							
					</ul>
					</div>
					</div>
				</div>
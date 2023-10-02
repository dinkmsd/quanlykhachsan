<!--
  jCarousel library
-->
<script type="text/javascript" src="/lib/jquery/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="/lib/jquery/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="/lib/jquery/jcarousel/skins/tango/skin.css" />
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
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
		 vertical: true,
        initCallback: mycarousel_initCallback
    });
});


</script>
	{/literal}	
				<div class="Module">
					<div class="tabGray"><b>{#partner#}</b></div>
					<div class="cateEnd">
					<div class="padding" align="center">
					<ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
					{foreach from=$aPartner item=item name=partner}						
							 <li><a href="{$item.Partner_Link}" {if $item.Partner_Photo} target="_blank"{/if}><img src="{$smarty.const.SITE_URL}upload/partner/{$item.Partner_Photo}"  border="0" width="150"/></a></li>
						
					{/foreach}							
					</ul>
					</div>
					</div>
				</div>
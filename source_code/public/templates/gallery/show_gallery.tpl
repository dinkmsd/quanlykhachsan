<div class="fullPage">
         <script type="text/javascript" src="http://www.ieltscnr.com/themes/default/js/jquery.min.js"></script>

            <h2 class="bigTitle">Thư viện</h2>
<script type="text/javascript" src="http://www.ieltscnr.com/themes/default/fancybox/jquery.fancybox.1.3.4.pack.js"></script>
            <link rel="stylesheet" type="text/css" href="http://www.ieltscnr.com/themes/default/fancybox/fancybox.css" media="screen" />
           {literal} <script type="text/javascript">
                $(document).ready(function() {
                    $("a[rel=serviceImage]").fancybox({
                        'transitionIn'		: 'fade',
                        'transitionOut'		: 'none',
                        
                        'centerOnScroll'	: 'true',
                        'overlayOpacity'	: '0.5',
                        'overlayColor'		: '#000',
                        'changeSpeed'		: '200',
                        
                        'titlePosition' 	: 'over',
                        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                        }
                    });
                });
            </script>{/literal}
            <div class="pageGallery">
            {foreach from=$slide item=item}
                <div class="galleryImage">
                    <a rel="serviceImage" href="upload/gallery/{$item.image}" title="{$item.title}">
                        <div class="hover"></div>
                        <img src="upload/gallery/{$item.image}" alt="photo"/>
                    </a>
                </div>{/foreach}
                <div class="clr"></div>
{if $sPaging}<div class="page" align="center">{$sPaging}</div>{/if}
            </div>
        </div>
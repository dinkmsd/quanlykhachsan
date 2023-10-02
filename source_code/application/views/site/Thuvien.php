<div class="colLeft fl">
          <h2 class="bigTitle">Thư viện</h2>
			<script type="text/javascript" src="<?php echo public_url(); ?>fancybox/jquery.fancybox.1.3.4.pack.js"></script>
            <link rel="stylesheet" type="text/css" href="<?php echo public_url(); ?>fancybox/fancybox.css" media="screen" />
            <script type="text/javascript">
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
            </script>
            <div class="pageGallery">
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>img/img01.jpg" title="Lorem ipsum dolor sit amet">
                        <div class="hover"></div>
                        <img src="<?php echo public_url(); ?>images/1.jpg" alt="photo"/>
                    </a>
                </div>
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>images/5.jpg" title=""><img src="<?php echo public_url(); ?>images/5.jpg" alt="photo"/></a>
                </div>
                
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>images/5.jpg" title=""><img src="<?php echo public_url(); ?>images/5.jpg" alt="photo"/></a>
                </div>
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>images/4.jpg" title=""><img src="<?php echo public_url(); ?>images/4.jpg" alt="photo"/></a>
                </div>
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>images/4.jpg" title=""><img src="<?php echo public_url(); ?>images/4.jpg" alt="photo"/></a>
                </div>
                
                <div class="galleryImage">
                    <a rel="serviceImage" href="<?php echo public_url(); ?>images/1.jpg" title=""><img src="<?php echo public_url(); ?>images/1.jpg" alt="photo"/></a>
                </div>
                <div class="clr"></div>
                
            </div>
        </div>
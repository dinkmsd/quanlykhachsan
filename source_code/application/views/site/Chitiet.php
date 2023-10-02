<div class="colLeft fl">
            <h2 class="newsDetailsTitle"><?php echo $phong->tenloaiphong; ?></h2>
            <div id="galleria">
                        <a href="<?php echo public_url().$phong->hinhanh; ?>">
                            <img title="Locomotives Roundhouse"
                                 alt="Steam locomotives of the Chicago &amp; North Western Railway."
                                 src="<?php echo public_url().$phong->hinhanh;?>">
                        </a>
                        
            </div>
            <div class="bottomBorder" style="height:25px;"></div>
            <ul class="roomDetailsInfo">
                <li>Báo chí</li>
                <li>Tivi truyền hình vệ tinh</li>
                <li>Internet wifi</li>               
            </ul>
            <ul class="roomDetailsInfo">
                <li>Tủ lạnh</li>              
                <li>Tủ quần áo</li>              
            </ul>
            <ul class="roomDetailsInfo">
                <li>Toilet khép kín</li>
                <li>Bồn tắm riêng</li>
                <li>Máy sấy tóc</li>
                <li>Bình nóng lạnh</li>
            </ul>
            <div class="clr"></div>
            
            <div class="priceTag"><?php echo $phong->giaphong; ?></div>
            <p class="roomDetailsContent"><?php echo $phong->chitiet; ?></p>
			
            <div class="bottomBorder" style="height:5px;"></div>           
                        
		  <script>
                Galleria.loadTheme('<?php echo public_url(); ?>js/galleria.classic.min.js');
                $('#galleria').galleria({
                        extend: function() {
                        this.play(2000); // will advance every 4th second
                        }
                }); 

            </script>       
        </div>
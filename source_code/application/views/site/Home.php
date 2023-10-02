
<!DOCTYPE html >
<html >
<head>
<title><?php echo isset($title) ? "Nam Định Luxury Hotel - $title": NULL ?></title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> 
<link rel="shortcut icon" href="" type="<?php echo public_url(); ?>image/x-icon" /> 
<!-- STYLE -->
<link rel="stylesheet" type="text/css" href="<?php echo public_url(); ?>home.css" media="screen" />    

<!-- SCRIPT -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo public_url(); ?>js/coin-slider.min.js"></script>
<script src="<?php echo public_url(); ?>js/galleria-1.2.6.min.js"></script>
<link rel="stylesheet" href="<?php echo public_url(); ?>coin-slider-styles.css" type="text/css" />

<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css'>

<script type="text/javascript" charset="utf-8">


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

   function xacnhan() {
       if (!window.confirm('Bạn có muốn xóa không?')) {
           return false;
       }
   }

 
 

</script>
<link rel="stylesheet" href="<?php echo public_url(); ?>menu/queryslidemenu.css" type="text/css" />
<script type="text/javascript" src="<?php echo public_url(); ?>menu/jqueryslidemenu.js"></script>
</head>
<body>
<div class="all">
        <!--HEADER-->
        <div class="header">
            <div class="logo"><a href="#"><img src="<?php echo public_url(); ?>images/logo.png" alt="photo" /></a></div>
            <!--Quang cao canh logo-->
           
	
                <div class="language fr" >
                    <div style=" text-align:right;">
                          <?php if($this->session->userdata('login') == null){ ?>
                             <a href="<?php echo site_url('site/Dangki/Dang_ki') ?>" style ="margin-left:130px;">Đăng kí</a>
                            <a href="<?php echo site_url('site/Dangnhap/Dang_nhap')?>" style ="margin-left: 10px;">Đăng nhập</a>
                          <?php } else{ ?>
                                  	
                              <a href="<?php echo site_url('site/Thongtincanhan/Thongtin_canhan') ?>" style ="text-align: right;"><?php echo $this->session->userdata('login')->hoten; ?></a>
                            <a href="<?php echo site_url('site/Dangnhap/logout'); ?>" style ="margin-left: 10px; ">Đăng xuất</a>            	   
                          <?php }?>
                    </div>
                	 
                </div>
                <div class="clr"></div>
            
        </div>
        
        <!--MENU-->
        <div id="myslidemenu" class="jqueryslidemenu headerMenu">
            <ul class="topMenu">
                <li><a href="<?php echo site_url('Trangchu/Trang_chu'); ?>">Trang chủ</a></li>
                <li><a href="<?php echo site_url('site/Buongphong/Buong_phong'); ?>">Buồng phòng</a></li>
                <li><a href="<?php echo site_url('site/Datphong/Dat_phong'); ?>">Đặt phòng</a></li>
                <li><a href="<?php echo site_url('site/Thuvien/Thu_vien'); ?>">Thư viện</a></li>
                <li><a href="<?php echo site_url('site/Giohang/Gio_hang'); ?>">Thông tin đặt phòng</a></li>
                <li><a href="<?php echo site_url('site/Lienhe/Lien_he'); ?>">Liên hệ</a></li>
               
               
                
            </ul>
		</div>
        <div class="content">
        <!--MAIN-->
            <div class="bigBanner" id="coinSlider">
                <a href="<?php echo public_url(); ?>images/1.jpg" target="_blank">
                    <img src="<?php echo public_url(); ?>images/1.jpg" alt="photo" />
                    <span>&nbsp;</span>

                </a>
                <a href="<?php echo public_url(); ?>images/2.jpg">
                     <img src="<?php echo public_url(); ?>images/2.jpg" alt="photo" />
                    <span>&nbsp;</span>
                </a>
                <a href="<?php echo public_url(); ?>images/3.jpg">
                     <img src="<?php echo public_url(); ?>images/3.jpg" alt="photo" />
                    <span>&nbsp;</span>
                </a>
                <a href="<?php echo public_url(); ?>images/4.jpg">
                     <img src="<?php echo public_url(); ?>images/4.jpg" alt="photo" />
                    <span>&nbsp;</span>
                </a>
            </div>
            <div class="bigBannerFooter"></div>
            
        <!--LEFT-->
       <?php $this->load->view($left); ?>
        <!--RIGHT-->
             <div class="colRight fr">
        	
            <h2 class="bigTitle">Bảng giá</h2>
            <div class="priceTable">
            <table border="0" cellpadding="0" cellspacing="0">
            	<col width="50%" /><col width="25%" /><col width="25%" />
            	<tr>
            	   
                	<th>Phòng nghỉ</th>               	
                	<th>Sức chứa</th>
                	<th>Giá</th>
                	<th>Thời gian</th>              	
                	
                </tr>
                <?php
                foreach ($this->Buongphong_Model->gettable('phong') as $row)
                {
                    echo " 
                            <tr>
                           
                        	<td>$row->tenloaiphong</td>                       	
                        	<td>$row->succhua</td>
                        	<td>$row->giaphong</td>
                        	<td>$row->thoigian</td>
                        	
                            </tr>
                        ";
                }
                ?>
                
                
            </table></div>
            <div class="supportOnline">
            	<h2 class="bigTitle">Hỗ trợ trực tuyến</h2>
                 <?php foreach ($this->Hotro_Model->gettable('hotro') as $row) {?>	
                <div class="supportInfo fl" style="margin-right: 60px;">
                    <b>Tư vấn đặt phòng</a></b>
                    <p><?php echo $row->sdt ?></p>
                    <a href="<?php echo $row->facebook ?>" rel="nofollow" target="_blank">
                        <img src="<?php echo public_url(); ?>images/6.jpg" width="50" heigh="50"">
                    </a>
                </div>
              
                <?php } ?>
            </div>
        </div>
        <div class="clr"></div>
</div>
</div>        <!--FOOTER-->
    <?php foreach ($this->Lienhe_Model->gettable('lienhe') as $row) {?>	
        <div class="footer">
        		
                 <a style="" href="<?php site_url('site/Trangchu/Trang_chu'); ?>">Luxury Hotel Nam Định</a><br />
                Địa chỉ: <?php echo $row->diachi ?><br />
                Hotline: <?php echo $row->hotline ?> - Email: <a href="mailto:<?php echo $row->email ?>"><?php echo $row->email ?></a>
        </div>
    <?php }?>    
</body>
</html>
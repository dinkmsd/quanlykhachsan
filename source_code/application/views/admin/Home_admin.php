<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo isset($title) ? "Nam Định Luxury Hotel - $title" : NULL; ?></title>

<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="<?php echo public_url('admin/images/'); ?>icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin/crown/'); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin/css/'); ?>css.css" media="screen">
<style>

    .calendar{
    	font-family: Arial; font-size: 12px;
    }
    table.calendar{
    	margin: auto; border-collapse: collapse;
    }
    .calendar .days td{
    	width:80px; height:80px; padding:4px;
    	border: 1px solid #999;
    	vertical-align: top;
    	background-color: #DEF;
    	
    }
    
     
    	
    .calendar .days td:hover{
    	background-color: #FFF;
    }
    .calendar .highlight{
    	font-weight: bold; 
    	color: #00F;
    }
</style>


<script type="text/javascript">
	var admin_url 	= '';
	var base_url 	= '';
	var public_url 	= '';

	
</script>

<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>

<script type="text/javascript" src="<?php echo public_url(); ?>js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo public_url(); ?>js/jquery/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/forms/jquery.inputlimiter.min.js"></script>

<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="<?php echo public_url('admin/crown/'); ?>/js/custom.js"></script>


<script type="text/javascript" src="<?php echo public_url('js/'); ?>ckeditor/ckeditor.js"></script> 
<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/scrollTo/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/number/jquery.number.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js"></script>
<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/zclip/jquery.zclip.js"></script>

<script type="text/javascript" src="<?php echo public_url('js/'); ?>jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo public_url('js/'); ?>jquery/colorbox/colorbox.css" media="screen">

<script type="text/javascript" src="<?php echo public_url('js/'); ?>custom_admin.js"></script>
</head>

<body>
	
	<!-- Left side content -->
	<div id="left_content">
		<div id="leftSide" style="padding-top:30px;">
		
		    <!-- Account panel -->
			
<div class="sideProfile">
	<a href="#" title="" class="profileFace"><img src="<?php echo public_url('admin/images/'); ?>user.png" width="40"></a>
	<span>Xin chào: <strong><?php echo $this->session->userdata('admin_login')->user; ?>!</strong></span>
	<span></span>
	<div class="clear"></div>
</div>
<div class="sidebarSep"></div>		    
		    <!-- Left navigation -->
			
<ul id="menu" class="nav">

			<li class="home">
		<?php  if($this->session->userdata('admin_login')->admin_group_id == 1) {?>
			<a href="<?php echo site_url('admin/Main/Ma_in'); ?>" class="active" id="current"  >
				<span>Bảng điều khiển</span>
				<strong></strong>
			</a>
	    <?php } else { ?>
	        <a  class="active" id="current"  style = "opacity: 0.1;">
				<span>Bảng điều khiển</span>
				<strong></strong>
			</a>
	    <?php } ?>
		</li>
			<li class="account">
		
			<a href="admin/tran.html" class=" exp">
				<span>Quản lý khách hàng</span>
				<strong>2</strong>
			</a><ul class="sub">
			    <li><a href="<?php echo site_url('admin/Quanlykhachhang/Danhsachkhachhang'); ?>">Danh sách khách hàng</a></li>
			    <li><a href="<?php echo site_url('admin/Quanlykhachhang/Themkhachhang'); ?>">Thêm khách hàng</a></li>
			    
			    
			    </ul>
						
		</li>	
						
	
			
		
			<li class="product">
		
			<a href="" class=" exp">
				<span>Phòng</span>
				<strong>2</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Quanlyphong/Danhsachphong'); ?>">
								Phòng							</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Quanlyphong/Themphong'); ?>">
								Thêm phòng							</a>
						</li>
											
									</ul>
						
		</li>
		
		<li class="tran">
		
			<a href="" class=" exp">
				<span>Quản lý đặt phòng</span>
				<strong>2</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Quanlydatphong/Danhsachdatphong'); ?>">
								Danh sách đặt phòng							</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Quanlydatphong/Themdatphong'); ?>">
								Thêm đặt phòng						</a>
						</li>
									</ul>
						
		</li>
		
		<li class="tran">
		
			<a href="" class=" exp">
				<span>Quản lý hóa đơn</span>
				<strong>3</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Hoadonnhanphong/Hoadon_nhanphong'); ?>">
								Hóa đơn nhận phòng						</a>
						</li>
						
							<li>
							<a href="<?php echo site_url('admin/Hoadonnhanphong/Them_Hoadon_nhanphong'); ?>">
								Thêm hóa đơn nhận phòng				</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Hoadontraphong/Hoadon_traphong'); ?>">
								Hóa đơn trả phòng					</a>
						</li>
									</ul>
						
		</li>
		<?php  if($this->session->userdata('admin_login')->admin_group_id == 1) {?>
			<li class="account">
		
			<a href="" class=" exp">
				<span>Quản lý nhân viên</span>
				<strong>4</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Quanlynhanvien/Danhsachnhanvien') ?>">
								Danh sách nhân viên							</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Quanlynhanvien/Themnhanvien') ?>">
								Thêm nhân viên						</a>
						</li>
						<li>
						<a href="<?php echo site_url('admin/Bangluong/Bang_luong') ?>">
								Bảng lương nhân viên						</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Bangluong/Tinhluong') ?>">
								Thêm lương						</a>
						</li>
											
									</ul>
						
		</li>
		
		
		<li class="account">
		
			<a href="" class=" exp">
				<span>Quản trị</span>
				<strong>3</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Quantri/Taikhoannhanvien'); ?>">
								Tài khoản nhân viên						</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Quantri/Nhomtaikhoan'); ?>">
								Nhóm tài khoản						</a>
						</li>
						
						<li>
							<a href="<?php echo site_url('admin/Quantri/Themtaikhoannhanvien'); ?>">
								Thêm tài khoản nhân viên					</a>
						</li>
											
									</ul>
						
		</li>
		<?php } else { ?>
		
			<li class="account" style = "opacity: 0.1;">
		
			<a  class=" exp">
				<span>Quản lý nhân viên</span>
				<strong>4</strong>
			</a>
			
		</li>
		
		
		<li class="account" style = "opacity: 0.1;">
		
			<a  class=" exp">
				<span>Quản trị</span>
				<strong>3</strong>
			</a>
			
							</li>
		<?php } ?>
		
		
			<li class="support">
		
			<a href="" class=" exp">
				<span>Hỗ trợ và liên hệ</span>
				<strong>4</strong>
			</a>
			
							<ul class="sub">
											<li>
							<a href="<?php echo site_url('admin/Hotrovalienhe/Hotro') ?>">
								Hỗ trợ							</a>
						</li>
											<li>
							<a href="<?php echo site_url('admin/Hotrovalienhe/Lienhe') ?>">
								Liên hệ							</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/Hotrovalienhe/Phan_hoi') ?>">
								Phản hồi của khách hàng						</a>
						</li>
						<li>
						<a href="<?php echo site_url('admin/Guiemail/Danhsachemail_goi') ?>">
								Danh sách email đã phản hồi					</a>
						</li>
									</ul>
						
		</li>
		
	
</ul>
			
		</div>
		<div class="clear"></div>
	</div>
	
	
	<!-- Right side -->
	<div id="rightSide">
	
	    <!-- Account panel top -->
		
<div class="topNav">
	<div class="wrapper">
		<div class="welcome">
			<span>Xin chào: <b><?php echo $this->session->userdata('admin_login')->user; ?>!</b></span>
		</div>
		
		<div class="userNav">
			<ul>
				<li><a href="<?php echo site_url('admin/Main/Ma_in'); ?>">
					<img style="margin-top:7px;" src="<?php echo public_url('admin/images/'); ?>icons/light/home.png">
					<span>Trang chủ</span>
				</a></li>
				
				<!-- Logout -->
				<li><a href="<?php echo site_url('site/Dangnhap/logout'); ?>">
					<img src="<?php echo public_url('admin/images/'); ?>icons/topnav/logout.png" alt="">
					<span>Đăng xuất</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
		
	    <!-- Main content -->
		
<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Bảng điều khiển</h5>
			<span><?php echo isset($title) ? $title : NULL; ?></span>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

<div class="line"></div>


<!-- Message -->


<!-- Main contents wrapper -->
    <?php $this->load->view($contents); ?>
<!-- End Main contents wrapper -->

		<div class="clear mt30"></div>
		
	    <!-- Footer -->
	    <div id="footer">
	    		        <div class="wrapper">

	        	<div>Nam Định Luxury Hotel</div>
	        </div>
	     </div>
	</div>
	<div class="clear"></div>

</body></html>
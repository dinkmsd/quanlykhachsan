<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo isset($title) ? "Nam Định Luxury Hotel - $title" : NULL; ?></title>

<meta name="robots" content="noindex, nofollow">

<link rel="shortcut icon" href="<?php echo public_url('admin/images/'); ?>icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin/crown/'); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo public_url('admin/css/'); ?>css.css" media="screen">


<script type="text/javascript">
	var admin_url 	= '';
	var base_url 	= '';
	var public_url 	= '';
</script>

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

<body class="nobg loginPage" style="min-height:100%;">

	<!-- Main content wrapper -->
	<div class="loginWrapper" style="top:45%;">
	
	    <div class="widget" id="admin_login" style="height:auto; margin:auto;">
	        <div class="title"><img src="<?php echo public_url('admin/images'); ?>/icons/dark/laptop.png" alt="" class="titleIcon" />
	        	<h6>Đăng nhập</h6>
	        </div>
	        
	        <form class="form" id="form" action="" method="post">
	           <fieldset>
	                   <div style="color: red; margin-left: 50px; font-size: 15px; font-weight: bold;" class = "formRow" id = "login_error"><?php echo form_error('login'); ?></div>
	                <div class="formRow">
	                    <label for="param_username">Tên đăng nhập:</label>
	                    <div class="loginInput"><input value="<?php echo set_value('user');?>" type="text" name="user" id="param_username" /></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="formRow">
	                    <label for="param_password">Mật khẩu:</label>
	                    <div class="loginInput"><input  type="password" name="pass" id="param_password" /></div>
	                    <div class="clear"></div>
	                </div>
	                
	                <div class="loginControl">
	                    
	                    <input type="submit" name="login"  value="Đăng nhập" class="dredB logMeIn" />
	                    <div class="clear"></div>
	                </div>
	            </fieldset>
	        </form>
	    </div>
	    
	</div>    
	
	<!-- Footer line -->
	<div id="footer">
				<div class="wrapper">Bản quyền © 2012-2016 hocphp.info</div>
	</div>

</body>
</html>
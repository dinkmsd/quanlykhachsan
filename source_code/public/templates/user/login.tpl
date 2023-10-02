<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập hệ thống quản trị</title>
{literal}
<style type="text/css">
	body{
		font-family:Arial, Helvetica, sans-serif;
		margin:0px;
		font-size:12px;
		color:white;
		height:100%;
		width:100%;				
		background-color:#EFEFDE;
		text-align:left;
	}
	h2{ padding:0; margin:5px; border-bottom:1px solid #fff; padding-bottom:5px;}
	.boxshadow{
-moz-box-shadow: 0 0 5px #888;
-webkit-box-shadow: 0 0 5px#888;
box-shadow: 0 0 5px #888;	
	}
	a{ color:#333;}
</style>
{/literal}
</head>

<body>
{if $error!=""}
<div style="position:absolute; top:10%; left:35%; z-index:900; width:30%;  text-align:center; background:#A3A38D; padding:15px 0;">
{$error}</div>
{/if}
<div style="width:30%; margin:auto; left:35%; background:#A3A38D; position:absolute; top:20%" class="boxshadow">
<div style="padding:10px">
<form action="" method="post" style="margin: 0px; padding: 0px;">
				<table width="100%" border="0" cellspacing="3" cellpadding="3">
				   <tr><td colspan="2"><h2>Đăng nhập hệ thống quản trị</h2></td></tr> 
				  <tr>
					<td>Tên đăng nhập</td>
					<td><input name="tex_username" type="text" style="width:200px" /></td>
				  </tr>
				  <tr>
					<td>Mật khẩu</td>
					<td><input name="tex_password" type="password" style="width:200px"  /></td>
				  </tr>
                  <tr><td></td><td><label><input type="checkbox"/>Nhớ mật khẩu</label> <a href="{$smarty.const.SITE_URL}{"index.php?mod=user&task=forgot_password"|url_friendly}">Quên mật khẩu?</a></td></tr>
				<tr><td></td><td><input  type="submit" style="cursor:pointer;" value="Đăng nhập" /></td></tr>
                </table>
				
	
</form>
</div>
</div>
</body>
</html>

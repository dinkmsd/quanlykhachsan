<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="{$smarty.const.SITE_URL}lib/jquery/jquery.js"></script>
<title>Quên mật khẩu</title>
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
{literal}
	<script language="javascript">
		function checkForm()
		{
			var re = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
			var email = $('#tex_email').val();
			
			if ( email == '')
			{
				alert ( "Bạn chưa nhập email " );
				$('#tex_email').focus();
				return false;
			}
			if ( !email.match(re) )
			{
				alert ( "Email không đúng. ");
				$('#tex_email').focus();
				return false;
			}
			
		}
	</script>
{/literal}

</head>

<body>
{if $error!=""}
<div style="position:absolute; top:10%; left:35%; z-index:900; width:30%;  text-align:center; background:#A3A38D; padding:15px 0;">
{$error}</div>
{/if}
<div style="width:30%; margin:auto; left:35%; background:#A3A38D; position:absolute; top:20%" class="boxshadow">
<div style="padding:10px; padding-bottom:20px;">
<form action="" method="post" onsubmit="return checkForm()" style="margin: 0px; padding: 0px;">
				<table width="100%" border="0" cellspacing="3" cellpadding="3">
				   <tr><td colspan="2"><h2>Quên mật khẩu</h2></td></tr> 
				    <tr><td colspan="2">Xin nhập địa chỉ email đăng ký tài khoản để chúng tôi gửi mật khẩu cho bạn.</td></tr>
				  <tr>
					<td>{#username#}</td>
					<td><input name="tex_email" id="tex_email" type="text" style="width:200px" /></td>
				  </tr>
				<tr><td></td><td><input  type="submit" style="cursor:pointer;" value="Gửi mật khẩu" /><a href="{$smarty.const.SITE_URL}{"index.php?mod=admin"|url_friendly}">Đăng nhập</a></td></tr>
                </table>
				
	
</form>
</div>
</div>
</body>
</html>

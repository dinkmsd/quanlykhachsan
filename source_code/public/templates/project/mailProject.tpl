<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div align="center"><b style="font-size:14px;font-family:Verdana; text-transform:uppercase;">{#title_construct#}</b></div>
<br><br><br>
<div class="userInfor">

<div style="font-size:12px;font-family:Verdana; text-transform:uppercase;"><b>{#projectInfor#}</b></div><br>
<table cellpadding="3" cellspacing="1" border="0">   
   {assign var=total value=0}
   {foreach item=item from=$aProject}
   <tr>
   		<td align="left" valign="top">
   		<b>{$item.parent}:</b>
		</td>
		<td align="left">{$item.title}
		{if $item.options!=''}
		<div style="line-height:22px; font-weight:bold; padding-left:20px;">
		{foreach from=$item.options item=opt}
			<div>- {$opt}</div>
		{/foreach}
		</div>
		{/if}
		</td>				   				
   </tr>   
   {/foreach}   
 </table>
<br><br>
<div style="font-size:12px;font-family:Verdana; text-transform:uppercase;"><b>{#userInfor#}</b></div><br>
<table cellpadding="5" cellspacing="0"  border="0">
	<tr>
		<td>{#name#}:</td>
		<td><b>{$data.txt_name}</b></td>
	</tr>
	<tr>
		<td>{#phone#}:</td>
		<td><b>{$data.txt_phone}</b></td>
	</tr>
	<tr>
		<td>{#email#}:</td>
		<td><b>{$data.txt_email}</b></td>
	</tr>
	<tr>
		<td>{#note#}:</td>
		<td><b>{$data.txt_note}</b></td>
	</tr>
</table>
</div>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<div align="center"><b style="font-size:14px;font-family:Verdana; text-transform:uppercase;">{#title_construct#}</b></div>
<br><br><br>
<div style="font-size:12px;font-family:Verdana; text-transform:uppercase;"><b>{#productInfor#}</b></div><br>
<table cellpadding="3" cellspacing="1" border="1" bordercolor="#18486E" style="border-collapse:collapse; margin-top:10px;">
   <tr align="center">
		<th>{#name#}</th>
		<th>{#price#}</th>
   </tr>
   {assign var=total value=0}
   {foreach item=item from=$aProduct}
   {assign var=total value=$total+$item.Product_Price}
   <tr>
		<td align="center">{$item.Product_Title}</td>				   		
		<td align="center" valign="middle">
			{$item.Product_Price|number_format:0:".":"."} {$currency}
		</td>
   </tr>   
   {/foreach}   
   {assign var=totalVND value=$total*$rate} 
   {assign var=totalAll value=$totalVND*$smarty.post.quantity}  
	<tr>
		<td colspan="2"><b>{#money#} :&nbsp;&nbsp;({$total|number_format:0:".":"."} {$currency} = {$totalVND|number_format:0:".":"."} {#vnd#}) x {$smarty.post.quantity} = {$totalAll|number_format:0:".":"."} {#vnd#}</b>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ({#rate#}: 1 {$currency}= {$rate|number_format:0:".":"."} {#vnd#})</td>
				   
   </tr>
 </table>
<br><br>
<div class="userInfor">
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
		<td>{$data.txt_note|nl2br}</td>
	</tr>
</table>
</div>
</body>
</html>

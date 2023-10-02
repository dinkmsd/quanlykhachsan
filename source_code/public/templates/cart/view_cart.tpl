{literal}
<script type="text/javascript">
	function updateCart(){
		document.frm_cart.action = "{/literal}{$smarty.const.SITE_URL}{literal}index.php?mod=cart&task=update_cart";
		document.frm_cart.submit();
	}
</script>
{/literal}
<div class="Module">
	<div class="tabBlue">					
		<b>{#cart#}</b>
	</div>
	
	<div class="borderModule">
		<form name="frm_cart" action="" method="post">
		
			 <table width="100%" cellpadding="3" cellspacing="1" border="1" bordercolor="#999" style="border-collapse:collapse;">
			   <tr align="center">
					<th>{#name#}</th>
					<th>{#photo#}</th>
					<th>{#price#}</th>
					<th>{#quantity#}</th>
					<th>{#money#}</th>
					<th>{#remove#}</th>
			   </tr>
			   
			   {foreach item=item from=$result}
			   {assign var=pid value=$item.Product_ID}
			   {assign var="delete_link" value="index.php?mod=cart&task=delete&pid=$pid"}
			   <tr>
					<td align="center">{$item.Product_Title}</td>				   		
					<td align="center">
						<img src="{$smarty.const.SITE_URL}upload/product/thumbnail/{$item.Product_Photo}" border="0" style="margin:5px;" >
					</td>
					<td width="110" align="center" valign="middle">
						{$item.Product_Price|number_format:0:".":"."} {$currency}
					</td>
					<td width="110" align="center" valign="middle">
						<input type="text" name="quantity[{$pid}]" style="width:50px;" value="{$item.quantity}"/>
					</td>
					<td width="100" align="right"><b style="color:#FF0000">{$item.subtotal|number_format:0:".":"."} {$currency}</b>&nbsp;&nbsp;</td>
					<td align="center" width="50" valign="middle">
						<a href="#" onclick='if(confirm("{#confirm_remove_product#}")) location.href="{$smarty.const.SITE_URL}{$delete_link|url_friendly}";'><img src="{$smarty.const.SITE_URL}/themes/default/images/delete.jpg" title="{#remove#}" border="0" ></a>
				   </td>
			   </tr>
			   {foreachelse}
				<tr>
				   <td colspan="6" align="center" style="padding:10px 0;"><b class="colorBrown">{#no_product_incart#}</b></td>
			   </tr>
			   {/foreach}		   
			   
			   {if $result}			   
				<tr>
				   <td colspan="2" align="right" style="font-weight:bold; text-transform:uppercase">{#money#}&nbsp;&nbsp;</td>
				   {assign var=translateVND value=$total*$rate}
				   <td colspan="4"><span id="total" style="font-weight:bold;">&nbsp;&nbsp;{$total|number_format:0:".":"."} {$currency} = {$translateVND|number_format:0:".":"."} {#vnd#} </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   {#rate#} 1 {$currency}={$rate|number_format:0:".":"."}{#vnd#}</span></td>				   
			   </tr>
			   {/if}
			   
			 </table>
			
			 <div style="margin-top:10px;" align="right">
				<a class="ButtonCart" href="{$smarty.const.SITE_URL}{"index.php?mod=product"|url_friendly}">{#continous_shopping#}</a>
				 {if $result}
				 {assign var="clear_link" value="/index.php?mod=cart&task=clear"}
				 <a class="ButtonCart" href="#" onclick="updateCart(); return false;">{#update_cart#}</a>
				 <a class="ButtonCart" href="{$smarty.const.SITE_URL}{"index.php?mod=cart&task=checkout"|url_friendly}">{#payment#}</a>
				 <a class="ButtonCart" href="#" onclick='if(confirm("{#confirm_reset_cart#}")) location.href="{$smarty.const.SITE_URL}{$clear_link|url_friendly}";'>{#reset_cart#}</a>
				 {/if}
				 <div class="clr"></div>
			</div> 
			
		
		</form>
	</div>	
</div>
<div class="clr"></div>
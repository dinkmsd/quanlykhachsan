<script>
var null_name = '{#null_name#}';
var null_email = '{#null_email#}';
var invalide_email = '{#invalide_email#}';
var select_product = '{#select_product#}';
var null_phone = '{#null_phone#}';
var select_project = '{#select_project#}';
</script>
{literal}
<script type="text/javascript">
	function changePro(pro, parentId){
		var url = {/literal}"{$smarty.const.SITE_URL}index.php?mod=project&task=changePro&ajax"{literal};
		$.get(url,{pid:pro}, function(result){			
			$('#options_'+parentId).show();			
			if(result!=''){
				$('#options_'+parentId).fadeOut(300, function(){
					$('#options_'+parentId).html(result);
				});
				$('#options_'+parentId).fadeIn(500);
			}else{
				$('#options_'+parentId).html('').hide();
			}
		});
	}
	
	function  validateForm(oForm){
		var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
		var i=0;
		var f=false;
		var obj = document.getElementById('select_'+i);
		
		while (obj!=null){			
			if(obj.value!=0){
				f = true; break;
			}else{
				i++;			
				var obj = document.getElementById('select_'+i);
			}		
		}
		
		if(!f){
			alert(select_project);
			return false;
		}
	
		if(oForm.txt_name.value==''){
			alert(null_name);
			oForm.txt_name.focus();
			return false;
		}
		
		if(oForm.txt_phone.value==''){
			alert(null_phone);
			oForm.txt_phone.focus();
			return false;
		}
		
		if ( oForm.txt_email.value == '')
		{
			alert (null_email);
			oForm.txt_email.focus();
			return false;
		}
		if ( !RE_EMAIL.test(oForm.txt_email.value) )
		{
			alert (invalide_email);
			oForm.txt_email.focus();
			return false;
		}
	}
</script>
{/literal}
				<div class="Module">
					<div class="tabBlue">					
						<b>{#project_contruction#}</b>
					</div>
					
					<div class="borderModule">
					{if $msg !=''}					
					<div align="center" style="margin-bottom:10px; color:#FF0000;">{$msg}</div>					
					{/if}
					<form name="frm_contact" id="frm_contact" method="post" action="" onsubmit="return validateForm(this);">		
						<table cellpadding="5" cellspacing="0" border="0" width="100%">
							{foreach from=$aResult item=item name=construc}
								<tr>
								<td valign="top"><b>{$item.Group_Name}:</b></td>
								<td>
								<select name="pro[]" id="select_{$smarty.foreach.construc.index}" onchange="changePro(this.value,{$item.Group_ID});">
									<option value="0">{#select_value#}</option>
									{foreach from=$item.projects item=product}
									<option value="{$product.id}">{$product.title}</option>
									{/foreach}
								</select>
								<div id="options_{$item.Group_ID}" style="line-height:20px; padding-left:10px; margin-top:10px; display:none;"></div>							
								</td>
								</tr>							
							{/foreach}							
						</table>						
					
						<table cellpadding="3" cellspacing="3">									
							<tr>					
								<td colspan="2" align="center"><br>
									<b style="font-size:14px;font-family:Verdana; text-transform:uppercase;" class="colorBrown">{#title_construct#}</b>
								</td>
							</tr>
							<tr>
								<th>{#name#}:</th>
								<td><input type="text" name="txt_name" style="width:300px"/></td>
							</tr>		
							<tr>
								<th>{#phone#}:</th>
								<td><input type="text" name="txt_phone" style="width:300px"/></td>
							</tr>		
							<tr>
								<th>{#email#}:</th>
								<td><input type="text" name="txt_email" style="width:300px;"/></td>
							</tr>
							<tr>
								<th valign="top">{#note#}:</th>
								<td><textarea name="txt_note" style="width:400px; height:200px;overflow:auto;"></textarea></td>
							</tr>
							
							<tr>
								<th>&nbsp;</th>
								<th align="center" style="margin-top:10px;">
									<input type="submit" name="bt_contact" value="{#send#}" class="button-rate" style="border:none; float:left; margin-right:5px;"/>
									<input type="reset" name="bt_reset" value="{#reset#}" class="button-rate" style="border:none;float:left;"/>
								</th>
							</tr>
						</table>							
					</form>
					</div>					
				</div>
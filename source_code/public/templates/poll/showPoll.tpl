<script type="text/javascript">
 var error_choose = '{#error_choose_answer#}';
 var poll_success = '{#poll_success#}';
{literal}
	function doPoll(pollId){		
		
			var obj = document.frmpoll.radPoll;
			var i , val;
			var flag = false;
			var val ='';
			for(i=0;i<obj.length;i++){
				if(obj[i].checked == true){
					flag = true;
					val += obj[i].value + '||';
				}			
			}
			
			if(flag == true){	
				$.get("{/literal}{$smarty.const.SITE_URL}{literal}index.php?mod=poll&task=poll&ajax",{'answer':val,'pollid':pollId},function(data){
						$("#div_poll").html('<div style="padding:0 0 10px 0; color:red;" align="center">' + poll_success + '</div>');
						$("#button_doPoll").hide();
					}
				);
			}else{
				alert(error_choose);
			}
	};	
	
	
	function statsPoll(id){	
		mywindow=window.open("{/literal}{$smarty.const.SITE_URL}{literal}index.php?mod=poll&task=stats&ajax&id="+ id,"newwindow","width=600px,height=400px,resizeable=false");
		mywindow.moveTo(420,400);
	}
{/literal}
</script>


				<div class="Module BgBlue">
					<div class="top"><div class="left"><div class="right"></div></div></div>
					<div class="center">
					<div style="padding:5px 4px 5px 10px; color:#fff;">
						<b style="display:block; color:#fff; text-transform:uppercase; margin-bottom:8px;">{#POLL#}</b>
						<div id="div_poll">
							<label>{$pollQuestion.Poll_Question}</label><br />
							{if $hide==1}
								<div style="padding:0 0 10px 0; color:red;" align="center">{#poll_success#}</div>
							{else}
							
							<div style="line-height:25px; padding-top:5px;">
							<form name="frmpoll" style="margin:0px;">
								{foreach from=$pollAnswer item=answer key=id name=poll}
									<input type="checkbox" name="radPoll" value="{$id}"  id="radPoll_{$smarty.foreach.poll.index}"/> <label class="font-11">{$answer}</label> <br />
								{/foreach}
							</form>							
							</div>
							<br />
							{/if}
						</div>
						<div align="center">
							<div style="width:152px;">
								{if $hide!=1}<a href="#" class="button-poll" id="button_doPoll" style="margin-right:5px;" onclick="doPoll({$pollQuestion.Poll_ID}); return false;">{#DOPOLL#}</a> {/if}
								<a href="#" class="button-poll" style="float:left;" onclick="statsPoll({$pollQuestion.Poll_ID}); return false;">{#RESULT_POLL#}</a>
								<div class="clr"></div>
							</div>
						</div>
						<div class="clr"></div>
					</div>
					</div>
					<div class="bottom"><div class="left"><div class="right"></div></div></div>
					
				</div>
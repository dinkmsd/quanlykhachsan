<div class="supportOnline">
            	<h2 class="bigTitle">{#hotro#}</h2>
            {foreach from = $arr_item item = item nam = item}
                <div class="supportInfo fl">	
               <b>{$item.Support_Name}</b>
                    <p><b>{$item.Support_Phone}</b></p>
                {if $item.Support_Type == 'yahoo'}
                    <a href="ymsgr:sendim?{$item.Support_Value}">
                    <img src="http://opi.yahoo.com/online?u={$item.Support_Value}&amp;m=g&amp;t=2" border="0" align="left"></a>
                    {if $item.Support_Name!=''}&nbsp;&nbsp;&nbsp;<b><a href="ymsgr:sendim?{$item.Support_Value}" style="text-decoration:none;"></a>{/if}
                {else}
                    <script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
                    <a href="skype:{$item.Support_Value}?chat"><img src="http://mystatus.skype.com/bigclassic/{$item.Support_Value}" width = "120" style="border: medium none ;" align="left"></a>
                    {if $item.Support_Name!=''}<br /><br />&nbsp;&nbsp;&nbsp;<b><a href="skype:{$item.Support_Value}?chat" style="text-decoration:none;"></b></a>{/if}
                {/if}
                </div>
            {/foreach}		
                
            </div>
            
 
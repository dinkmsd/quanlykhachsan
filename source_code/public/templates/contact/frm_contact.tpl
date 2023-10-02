<script>
var null_name = '{#null_name#}';
var null_email = '{#null_email#}';
var null_security = '{#null_security#}';
var invalide_email = '{#invalide_email#}';
var security_incorrect = '{#security_incorrect#}';
</script>
{literal}
<script language="javascript">	
	function validateForm( frm )
	{
		var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;

		if ( frm.txt_name.value == '')
		{
			alert (null_name);
			frm.txt_name.focus();
			return false;
		}
		if ( frm.txt_email.value == '')
		{
			alert (null_email);
			frm.txt_email.focus();
			return false;
		}
		if ( !RE_EMAIL.test(frm.txt_email.value) )
		{
			alert (invalide_email);
			frm.txt_email.focus();
			return false;
		}
		if ( frm.txt_captcha.value == '')
		{
			alert (null_security);
			frm.txt_captcha.focus();
			return false;
		}
		if ( frm.txt_captcha.value != frm.hid_keycapcha.value )
		{
			alert (security_incorrect);
			frm.txt_captcha.focus();
			return false;
		}
		
	}
</script>
{/literal}
<div class="colLeft fl">
            <h2 class="bigTitle">{#CONTACT#}</h2>
			<div class="contactMap"></div>
			<div class="contactForm fl">
                <form method="post">
                  <p>
                  <input type="text" name="txt_name" title="{#name#}" class="inputLabel">
                  </p>
                  <p>
                  <input type="text" name="txt_email" title="{#email#}" class="inputLabel">
                  </p>
                  <p>
                  <input type="text" name="txt_phone" title="{#phone#}" class="inputLabel">
                  </p>
                  <p>
                  <textarea name="txt_content" id="fm_message" rows="6" cols="53" tabindex="4" title="Nội dung liên hệ" class="inputLabel"></textarea>
                  </p>
                  <input name="form_submitted" type="submit" value="Gửi liên hệ">
                </form>            
            </div>
			<div class="contactInfo fr">
               {$aContact.content}

            </div>
        </div>

	
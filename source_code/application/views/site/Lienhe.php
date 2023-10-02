<div class="colLeft fl">
            
            <h2 class="bigTitle">Liên hệ</h2>
			<div class="contactForm fl">
                <form method="post" action="">
                  <p>
                  <div style="color: blue;font-weight: bold;"><?php echo $this->session->flashdata('flash_phanhoi'); ?></div>                            	
                  </p>
                  <p>
                  <input name="hoten" title="Họ tên" class="" type="text" placeholder="Họ tên" value="<?php echo isset($this->session->userdata('login')->hoten) ? $this->session->userdata('login')->hoten: set_value('hoten'); ?>">
                  <div style="color: red;" class = "error" id = "hoten_error"><?php echo form_error('hoten'); ?></div>
                  </p>                 
                  <p>
                  <input name="email" title="Email" class="" placeholder="Email" type="text" value="<?php echo isset($this->session->userdata('login')->email) ? $this->session->userdata('login')->email: set_value('email'); ?>">
                    <div style="color: red;" class = "error" id = "hoten_error"><?php echo form_error('email'); ?></div>
                  </p>
                  <p>
                  <input name="sdt" title="Điện thọai" placeholder="Số điện thoại" class="" type="text" value="<?php echo isset($this->session->userdata('login')->sdt) ? $this->session->userdata('login')->sdt: set_value('sdt'); ?>">
                    <div style="color: red;" class = "error" id = "hoten_error"><?php echo form_error('sdt'); ?></div>
                  </p>
                  <p>
                  <input name="tieude" title="Tiêu đề" placeholder="Tiêu đề" class="" type="text" value="<?php echo set_value('tieude'); ?>">
                    <div style="color: red;" class = "error" id = "hoten_error"><?php echo form_error('tieude'); ?></div>
                  </p>
                  <p>
                  <textarea name="nd"  placeholder="Nội dung" rows="6" cols="53" tabindex="4" title="Nội dung liên hệ" class=""><?php echo set_value('nd'); ?></textarea>
                   <div style="color: red;" class = "error" id = "hoten_error"><?php echo form_error('nd'); ?></div>
                  </p>
                  <input value="Gửi liên hệ" type="submit" name="phanhoi">
                </form>            
            </div>
			<div class="contactInfo fr">
                <?php foreach ($this->Lienhe_Model->gettable('lienhe') as $row) {?>	
               <b style="font-size:20px; ">Địa chỉ:</b> <br/><?php echo $row->diachi ?><br />
                <b style="font-size:20px;">Hotline: <br/></b><?php echo $row->hotline ?><br />
                <b style="font-size:20px;">Email: <br/></b><a href="mailto:<?php echo $row->email ?> "><?php echo $row->email ?></a><br /><br/>
                <?php } ?>

            </div>
      
            
          
			<div class="contactMap" >
			  
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5350493405003!2d106.69010741428693!3d10.770271562253585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3db43604cb%3A0x403bcea58247a3ba!2zOCBOZ3V54buFbiBWxINuIFRyw6FuZywgQuG6v24gVGjDoG5oLCBRdeG6rW4gMSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1481996198404" width="600" height="285" frameborder="0" style="border:0" allowfullscreen></iframe>
            
			</div>
		         
               
              

            
        </div>
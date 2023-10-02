<div class="colLeft fl">
            <h2 class="bigTitle">Lấy lại mật khẩu</h2>
                <div class="bookingPage">
                    <form method="post" action="" >
                      
                        <ul class="bookingFormContent">
                            <li>
                             <div style="color: red; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_check'); ?></div>
                            	<div style="color: blue; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_phanhoi'); ?></div>
                            	
                            	<label>Tài khoản:</label>
                                <input style="width:350px;" value="<?php echo set_value('user') ?>" placeholder="Nhập tài khoản của bạn" type="text" name="user"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('user'); ?></div>
                            </li>
                             <li>
                            	<label>Email:</label>
                                <input style="width:350px; " value="<?php echo set_value('email') ?>" placeholder="Nhập Email" type="text" name="email"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('email'); ?></div>
                            </li>
                            
                            
                            
                            
                            
                        	<li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Gửi yêu cầu" id="" name="submit">
                            </li>
                        </ul>
                      
                    </form>
                </div>
            
        </div>
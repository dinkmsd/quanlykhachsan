<div class="colLeft fl">
            <h2 class="bigTitle">Đăng nhập</h2>
                <div class="bookingPage">
                    <form method="post" action="">
                        <ul class="bookingFormContent">
                        	<li>
                        	   <div style="color: red; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_datphong'); ?></div>
                        	   <div style="color: red; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_giohang'); ?></div>
                        	    <div style="color: red; margin-left: 114px; font-size: 15px; font-weight: bold;" class = "error" id = "login_error"><?php echo form_error('login'); ?></div>
                            	<label>Tài khoản:</label>
                                <input  value="<?php echo set_value('user'); ?>" placeholder="Nhập tài khoản người dùng" type="text" name="user" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "user_error"><?php echo form_error('user'); ?></div>
                            </li>
                        	<li>
                            	<label>Mật khẩu:</label>
                                <input  style="width:222px; height: 22px; margin-left: 10px;" value="" type="password" placeholder="Nhập mật khẩu" name="pass" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "pass_error"><?php echo form_error('pass'); ?></div>
                                
                            </li>
                            
                            <li>
                            	<label>&nbsp;</label>
                                <input style="margin-left: 10px; " name="dn" type="radio" value="Khách" />Khách
                                <input style="margin-left: 50px; " name="dn" type="radio" value="Nhân viên" />Nhân viên <br/>
                                 <div style="color: red; margin-left: 114px;" class = "error" id = "pass_error"><?php echo form_error('dn'); ?></div>
                           </li>
                            
                            <li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Đăng nhập" id="" name="login">
                            </li>
                            
                             <li>
                            	<label>&nbsp;</label>
                                <span style="margin-left: 10px; ">Bạn chưa có tài khoản, Bấm <a href="<?php echo site_url('site/Dangki/Dang_ki'); ?>" >vào đây</a> để đăng kí</span>
                            </li>
                            
                              <li>
                            	<label>&nbsp;</label>
                                <span style="margin-left: 10px; "> <a href="<?php echo site_url('site/Dangnhap/Quenmatkhau'); ?>" >Quên mật khẩu</a></span>
                            </li>
                        </ul>
                    </form>
                </div>
            
        </div>
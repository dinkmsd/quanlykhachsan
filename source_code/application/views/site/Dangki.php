<div class="colLeft fl">
            <h2 class="bigTitle">Đăng kí</h2>
                <div class="bookingPage">
                    <form method="post" action="" >
                        <ul class="bookingFormContent">
                            <li>
                                <div style="color: blue; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_dangki'); ?></div>
                            	<label>Họ tên:</label>
                                <input style="width:350px;" name="hoten" value="<?php echo set_value('hoten'); ?>" placeholder="Nhập đầy đủ họ và tên của bạn" type="text" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "hoten_error"><?php echo form_error('hoten'); ?></div>
                            </li>
                            <li>
                            	<label>Ngày sinh:</label>
                                <select class="" name="ngaysinh" style="width:103px;">
                                    <?php for($i = 1; $i<=31; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>
                                    
                                </select>
                                <select class="" name="thangsinh" style="width:103px;">
                                    <?php for($i = 1; $i<=12; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>
                                </select>
                                <select class="" name="namsinh" style="width:103px;">
                                    <?php for($i = 1960; $i<=2017; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>              
                                </select>
                            </li>
                            <li>
                            	<label>Giới tính:</label>
                                <select class="" name= "gioitinh" style="width:103px;">
                                   <?php echo "<option value =\"Nam\">Nam</option>"; ?>
                                   <?php echo "<option value =\"Nữ\">Nữ</option>"; ?>
                                    
                                </select>                     
                            </li>
                            <li>
                            	<label>Email:</label>
                                <input style="width:350px;" value="<?php echo set_value('email'); ?>" placeholder="Nhập địa chỉ email của bạn" type="text" name="email" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "email_error"><?php echo form_error('email'); ?></div>
                            </li>
                            <li>
                            	<label>Số điện thoại:</label>
                                <input style="width:350px;" value="<?php echo set_value('sdt'); ?>" placeholder="Nhập số điện thoại của bạn" type="text" name="sdt" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "sdt_error"><?php echo form_error('sdt'); ?></div>
                            </li>
                            <li>
                            	<label>CMND:</label>
                                <input style="width:350px;" value="<?php echo set_value('cmnd'); ?>" placeholder="Nhập số chứng minh của bạn" type="text" name="cmnd" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('cmnd'); ?></div>
                            </li>
                            
                            <li>
                            	<label>Tài khoản:</label>
                                <input style="width:350px;" value="<?php echo set_value('user'); ?>" placeholder="Nhập tài khoản người dùng" type="text" name="user" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "user_error"><?php echo form_error('user'); ?></div>
                            </li>
                            <li>
                            	<label>Mật khẩu:</label>
                                <input  style="width:352px; height: 22px; margin-left: 10px;" value="" type="password" placeholder="Nhập mật khẩu" name="pass" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "pass_error"><?php echo form_error('pass'); ?></div>
                            </li>
                            <li>
                            	<label>Xác nhận:</label>
                                <input style="width:352px; height: 22px; margin-left: 10px;" value="" placeholder="Nhập lại mật khẩu" type="password" name="repass" value="" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "repass_error"><?php echo form_error('repass'); ?></div>
                            </li>              	
                        	<li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Đăng kí" id="" name="submit">
                            </li>
                        </ul>
                    </form>
                </div>
            
        </div>
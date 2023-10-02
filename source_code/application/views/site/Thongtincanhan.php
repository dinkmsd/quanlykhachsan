<div class="colLeft fl">
            <h2 class="bigTitle">Thông tin cá nhân</h2>
                <div class="bookingPage">
                    <form method="post" action="" >
                      
                        <ul class="bookingFormContent">
                            <li>
                                <div style="color: blue; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_capnhat'); ?></div>
                            	<label>Họ tên:</label>
                                <input style="width:350px;" name="hoten" value="<?php echo $this->session->userdata('login')->hoten; ?>" placeholder="Nhập đầy đủ họ và tên của bạn" type="text" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "hoten_error"><?php echo form_error('hoten'); ?></div>
                            </li>
                            <li>
                            	<label>Ngày sinh:</label>
                                <input style="width:350px;" name="ngaysinh" value="<?php echo $this->session->userdata('login')->ngaysinh; ?>" placeholder="Nhập ngày sinh của bạn" type="text" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "ngaysinh_error"><?php echo form_error('ngaysinh'); ?></div>   
                                    
                                    
                               
                            </li>
                            <li>
                            	<label>Giới tính:</label>
                                <input style="width:350px;" name="gioitinh" value="<?php echo $this->session->userdata('login')->gioitinh; ?>" placeholder="Nhập giới tính của bạn" type="text" />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "ngaysinh_error"><?php echo form_error('gioitinh'); ?></div>
                                    
                                           
                            </li>
                            <li>
                            	<label>Email:</label>
                                <input style="width:350px;" value="<?php echo $this->session->userdata('login')->email; ?>" placeholder="Nhập địa chỉ email của bạn" type="text" name="email"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "email_error"><?php echo form_error('email'); ?></div>
                            </li>
                            <li>
                            	<label>Số điện thoại:</label>
                                <input style="width:350px;" value="<?php echo $this->session->userdata('login')->sdt; ?>" placeholder="Nhập số điện thoại của bạn" type="text" name="sdt"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "sdt_error"><?php echo form_error('sdt'); ?></div>
                            </li>
                            <li>
                            	<label>CMND:</label>
                                <input style="width:350px;" value="<?php echo $this->session->userdata('login')->cmnd; ?>" placeholder="Nhập số chứng minh của bạn" type="text" name="cmnd"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('cmnd'); ?></div>
                            </li>
                           
                            <li>
                            	<label>&nbsp;</label>
                                <span style="margin-left: 10px; "> <a href="<?php echo site_url('site/Thongtincanhan/Doimatkhau'); ?>" >Đổi mật khẩu</a></span>
                            </li>
                            
                            
                        	<li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Cập nhật" id="" name="submit">
                            </li>
                        </ul>
                      
                    </form>
                </div>
            
        </div>
<div class="colLeft fl">
            <h2 class="bigTitle">Đổi mật khẩu</h2>
                <div class="bookingPage">
                    <form method="post" action="" >
                      
                        <ul class="bookingFormContent">
                            <li>
                             <div style="color: blue; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_capnhat'); ?></div>
                            	<label>Mật khẩu cũ:</label>
                                <input style="width:351px; margin-left: 10px;" value="" placeholder="Nhập mật khẩu cũ của bạn" type="password" name="pass_cu"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('pass_cu'); ?></div>
                            </li>
                             <li>
                            	<label>Mật khẩu mới:</label>
                                <input style="width:351px; margin-left: 10px;" value="" placeholder="Nhập mật khẩu mới" type="password" name="pass_moi"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('pass_moi'); ?></div>
                            </li>
                             <li>
                            	<label>Xác nhận:</label>
                                <input style="width:351px; margin-left: 10px;" value="" placeholder="Xác nhận mật khẩu" type="password" name="repass_moi"  />
                                <div style="color: red; margin-left: 114px;" class = "error" id = "cmnd_error"><?php echo form_error('repass_moi'); ?></div>
                            </li>
                            
                            
                            
                            
                        	<li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Cập nhật" id="" name="submit">
                            </li>
                        </ul>
                      
                    </form>
                </div>
            
        </div>
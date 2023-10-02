<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Thêm mới khách hàng</h6>
						
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
	<div class="formRow">
    	<label class="formLeft" for="param_name">Họ tên:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo set_value('hoten'); ?>" name="hoten" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('hoten') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày sinh:<span class="req">*</span></label>
    	<div class="formRight">
            <select class="" name="ngaysinh" style="width:113px;">
                                    <?php for($i = 1; $i<=31; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>
                                    
                                </select>
                                <select class="" name="thangsinh" style="width:113px;">
                                    <?php for($i = 1; $i<=12; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>
                                </select>
                                <select class="" name="namsinh" style="width:113px;">
                                    <?php for($i = 1960; $i<=2017; $i++)
                                        {
                                            echo "<option value=\"$i\">$i</option>";
                                        }
                                    ?>              
            </select>                    
    		
    		<span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Giới tính:<span class="req">*</span></label>
    	<div class="formRight">
    		<select class="" name= "gioitinh" style="width:113px;">
                                   <?php echo "<option value =\"Nam\">Nam</option>"; ?>
                                   <?php echo "<option value =\"Nữ\">Nữ</option>"; ?>
                                    
             </select>  
    		<span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="sdt" id="param_name" value="<?php echo set_value('sdt'); ?>" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('sdt') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">CMND:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="cmnd" id="param_name" value="<?php echo set_value("cmnd") ?>" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('cmnd') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 607px; ">
	           			<input value="Thêm mới" class="redB" type="submit">
	           			<input value="Tạo lại" class="basic" type="reset">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
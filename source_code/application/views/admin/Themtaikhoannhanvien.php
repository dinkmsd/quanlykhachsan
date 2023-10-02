<div class="wrapper">
	
	
	
		<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Thêm tài khoản nhân viên</h6>
						
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
			
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Mã nhân viên:<span class="req">*</span></label>
    	<div class="formRight">
          
           <select style="width:103px;" name="id_nhanvien">
                                 <?php
                                    foreach ($this->Nhanvien_Model->gettable('nhanvien') as $row)
                                    {
                                        echo " <option  value=\"$row->id_nhanvien\">$row->id_nhanvien</option>";
                                    }
                                 ?>
                                    
             </select>
             <br/>
    		<span name="name_autocheck" class="autocheck" style="margin-left: 0px;color:red;"><?php echo form_error('id_nhanvien') ?></span>
    		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
					     
	
    
    
    
  
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tài khoản:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="user" id="param_name" value="<?php echo set_value('user'); ?>" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('user') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Mật khẩu:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="pass" id="param_name" value="" _autocheck="true" type="password"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('pass') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Nhập lại mật khẩu:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="repass" id="param_name" value="" _autocheck="true" type="password"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('repass') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Nhóm tài khoản:<span class="req">*</span></label>
    	<div class="formRight">
          
            <select style="width:103px;" name="id_nhomtk">
                                 <?php
                                    foreach ($this->Nhomtaikhoan_Model->gettable('admin_group') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->id</option>";
                                    }
                                 ?>
                                    
             </select>
    		
    		<span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 688px; ">
	           			<input value="Thêm mới" class="redB" type="submit">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
	
</div>


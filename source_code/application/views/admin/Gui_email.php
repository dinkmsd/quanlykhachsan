<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Phản hồi lại cho khách hàng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
						<h6 style="margin-left: 78px; color: red;"><?php echo $this->session->flashdata('flash_b'); ?></h6>
						
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
					     <div class="formRow">
    	<label class="formLeft" for="param_name">Số phản hồi:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $phanhoi->id; ?>" name="id_phanhoi" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
       <?php foreach ($this->Lienhe_Model->gettable('lienhe') as $row) {?>
     <div class="formRow">
    	<label class="formLeft" for="param_name">Email gởi:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $row->email;?>" name="email_goi" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
     <?php } ?>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Mật khẩu:<span class="req">*</span></label>
    	<div class="formRight">
    	 
    		<span class="oneTwo"><input value ="" name="pass" id="param_name" _autocheck="true" type="password" ></span>
    	   <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('pass') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
      <div class="formRow">
    	<label class="formLeft" for="param_name">Email nhận:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $phanhoi->email; ?>" name="email" id="param_name" _autocheck="true" type="text" ></span>
    	    <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('email') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
					     
	<div class="formRow">
    	<label class="formLeft" for="param_name">Tiêu đề:<span class="req">*</span></label>
    	<div class="formRight">    	    
    		<span class="oneTwo"><input value ="<?php echo $phanhoi->tieude; ?>" name="tieude" id="param_name" _autocheck="true" type="text" ></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('tieude') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
   
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Nội dung:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="3" cols="20" name="noidung" id="param_name" value="" _autocheck="true" type="text"><?php echo set_value('noidung'); ?></textarea></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('noidung') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 677px; ">
	           			<input value="Gửi email" class="redB" type="submit">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
		
		
		
</div>
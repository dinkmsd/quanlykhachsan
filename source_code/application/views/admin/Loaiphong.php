<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Loại phòng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					  
					  <div class="formRow">
    	<label class="formLeft" for="param_name">ID:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $phong->id; ?>" name="id" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
					     
	<div class="formRow">
    	<label class="formLeft" for="param_name">Tên loại phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $phong->tenloaiphong ?>" name="tenloaiphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Giá phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $phong->giaphong ?>" name="giaphong" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('giaphong') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Thời gian:<span class="req"></span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="thoigian" id="param_name" value="<?php echo $phong->thoigian ?>" _autocheck="true" type="text" ></span>   
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('thoigian') ?></span>		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Sức chứa:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input style="width:103px; height:25px;" name="succhua" id="param_name" value="<?php echo $phong->succhua ?>" _autocheck="true" type="number" min = "1" ></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('succhua') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Mô tả:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="3" cols="20" name="mota" id="param_name" value="" _autocheck="true" type="text"><?php echo $phong->mota ?></textarea></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('mota') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
      <div class="formRow">
    	<label class="formLeft" for="param_name">Chi tiết:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="5" cols="20" name="chitiet" id="param_name" value="" _autocheck="true" type="text"><?php echo $phong->chitiet ?></textarea></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('chitiet') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
   
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 677px; ">
	           			<input value="Cập nhật" class="redB" type="submit">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
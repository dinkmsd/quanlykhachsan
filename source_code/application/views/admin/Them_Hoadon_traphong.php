<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Thêm mới hóa đơn nhận phòng</h6>
					
						
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
					     
					     
					     
					     
	  <div class="formRow">
    	<label class="formLeft" for="param_name">Mã hóa đơn nhận phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanphong->idhoadon_nhanphong; ?>" name="idhoadon_nhanphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Mã khách hàng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanphong->idkhachhang; ?>" name="idkhachhang" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Phòng số:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanphong->idphong_chothue; ?>" name="idphong_chothue" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày nhận phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo $nhanphong->ngaynhanphong; ?>" name="ngaynhanphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
  
    
    
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Giá phòng / 1 ngày:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo set_value('giaphong'); ?>" name="giaphong" id="param_name" _autocheck="true" type="text" ></span>
    	   <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('giaphong') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
   
    
    
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 595px; ">
	           			<input value="Thêm mới" class="redB" type="submit">
	           			<input value="Tạo lại" class="basic" type="reset">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
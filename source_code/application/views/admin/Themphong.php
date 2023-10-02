<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Loại phòng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					  
					
					     
	<div class="formRow">
    	<label class="formLeft" for="param_name">Tên loại phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"> <select style="width:365px;" name="id_loaiphong">
                                 <?php
                                    foreach ($this->Buongphong_Model->gettable('phong') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->tenloaiphong</option>";
                                    }
                                 ?>
                                    
                                </select>
            </span>
    	    <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('tenloaiphong') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tình trạng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="" name="tinhtrang" id="param_name" _autocheck="true" type="text" ></span>
    	    <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('tinhtrang') ?></span>
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
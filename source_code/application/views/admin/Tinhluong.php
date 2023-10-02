<div class="wrapper">
	
	
	
		<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Tính lương cho nhân viên</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
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
    		
    		<span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
					     
	 <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày bắt đầu làm việc:<span class="req">*</span></label>
    	<div class="formRight">
    		<select class="" name="ngayden" style="width:103px;">
                                   <?php for ($i = 1; $i<=31; $i++) 
                                   {
                                    if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                   }
                                   ?>
                                </select>
                                <select class="" name="thangden" style="width:103px;">
                                     <?php for ($i = 1; $i<=12; $i++) 
                                   {
                                    if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                   }
                                   ?>
                                </select>
                                <select class="" name="namden" style="width:103px;">
                                   
                                     <?php for ($i = 2016; $i<=2030; $i++) 
                                   {
                                       echo " <option value=\"$i\">$i</option>";
                                   }
                                   ?>
                                </select>
           
            <span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
  
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Lương cứng / 1 tháng:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="luongcung" id="param_name" value="" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('luongcung') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Ghi chú:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="3" cols="20" name="ghichu" id="param_name" value="" _autocheck="true" type="text"></textarea></span>
    		
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


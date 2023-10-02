<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
			
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Thêm mới đặt phòng</h6>
						<h6 style="margin-left: 85px; color: red;"><?php echo $this->session->flashdata('flash_dates'); ?></h6>
						
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
	<div class="formRow">
    	<label class="formLeft" for="param_name">Mã khách hàng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		 <select style="width:330px;" name="idkhachhang">
                                 <?php
                                    foreach ($this->Khachhang_Model->gettable('khachhang') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->id</option>";
                                    }
                                 ?>
                                    
           </select>
    	
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Loại phòng:<span class="req">*</span></label>
    	<div class="formRight">
          
            <select style="width:330px;" name="idphong">
                                 <?php
                                    foreach ($this->Buongphong_Model->gettable('phong') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->tenloaiphong</option>";
                                    }
                                 ?>
                                    
             </select>
    		
    		<span name="name_autocheck" class="autocheck"></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày đến:<span class="req">*</span></label>
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
    	<label class="formLeft" for="param_name">Ngày đi:<span class="req">*</span></label>
    	<div class="formRight">
    		<select class="" name="ngaydi" style="width:103px;">
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
                                <select class="" name="thangdi" style="width:103px;">
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
                                <select class="" name="namdi" style="width:103px;">
                                   
                                     <?php for ($i = 2016; $i<=2030; $i++) 
                                   {
                                       echo " <option value=\"$i\">$i</option>";
                                   }
                                   ?>
                                </select>
    		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Số người:<span class="req">*</span></label>
    	<div class="formRight">
    		<input style="  width:103px;" type="number" min="1" name="songuoi" value="2"/>
    	
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Số phòng:<span class="req">*</span></label>
    	<div class="formRight">
    		 <input style=" width:103px;" type="number" min="1" name="sophong" value="1"/>
    	
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    
						
	        		</div><!-- End tab_container-->
	        		
	        		<div class="formSubmit" style = "padding-right: 675px; ">
	           			<input value="Thêm mới" class="redB" type="submit">
	           			
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>
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
    	<label class="formLeft" for="param_name">Phòng số:<span class="req">*</span></label>
    	<div class="formRight">
          
            <select style="width:330px;" name="idphong_chothue">
                                 <?php
                                    foreach ($this->Quanlyphong_Model->gettable('phongchothue') as $row)
                                    {
                                        echo " <option  value=\"$row->idphong_chothue\">$row->idphong_chothue</option>";
                                    }
                                 ?>
                                    
             </select>
    		
    		<span name="name_autocheck" class="autocheck"></span>
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
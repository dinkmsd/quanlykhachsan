<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách hỗ trợ trực tuyến</h6>
			<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:120px;">Mã hỗ trợ</td>
					<td>Facebook</td>
					<td>Số điện thoại</td>
					<td>Cập nhật</td>
				
				</tr>
			</thead>
			
 			
 			
			<tbody>
				<!-- Filter -->
				<?php foreach ($this->Hotro_Model->gettable('hotro') as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id; ?>"></td>
						
						<td class="textC"><?php echo $row->id; ?></td>	
						<td class="textC"><?php echo $row->facebook; ?></td>	
						<td class="textC"><?php echo $row->sdt; ?></td>						
							
						
						<td class="option">
							 <a href="<?php echo site_url('admin/Hotrovalienhe/Hotro/').$row->id; ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							
						</td>
					</tr>
					
						
						
						
						
						

				<?php } ?>
				
			</tbody>
		</table>
		</form>
	</div>
	
	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Cập nhật</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
					     
					     <div class="formRow">
    	<label class="formLeft" for="param_name">Mã hỗ trợ:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($hotro->id) ? $hotro->id: NULL ?>" name="id" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('id') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
     
					     
	<div class="formRow">
    	<label class="formLeft" for="param_name">Facebook:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($hotro->facebook) ? $hotro->facebook: NULL ?>" name="facebook" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('facebook') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Số điện thoại:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($hotro->sdt) ? $hotro->sdt: NULL ?>" name="sdt" id="param_name" _autocheck="true" type="text"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('sdt') ?></span>
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
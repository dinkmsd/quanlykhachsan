<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Chưa xử lý</h6>
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_datphong'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số đặt phòng</td>
					<td style="width:80px;">Mã khách hàng</td>
					<td style="width:80px;">Loại phòng</td>
					<td>Ngày đến</td>
					<td>Ngày đi</td>
					<td style="width:80px;">Số người</td>
					<td style="width:80px;">Số phòng</td>
					
					<td>Ngày đặt phòng</td>
					
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
 			
				<tr>
					<td colspan="10">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					     <div class="pagination">
			               			            </div>
					</td>
				</tr>
		      
			</tfoot>
 			
			<tbody>
				<!-- Filter -->
				<?php foreach ($rr as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->iddatphong; ?>"></td>
						
						<td class="textC"><?php echo $row->iddatphong; ?></td>		
						<td class="textC"><?php echo $row->idkhachhang; ?></td>						
						
						<td><span title="" class="tipS"><?php echo $row->idphong; ?></span></td>
						
						<td><?php echo $row->ngayden ?></td>
						<td><?php echo $row->ngaydi ?></td>
						<td><span title="" class="tipS"><?php echo $row->songuoi ?></span></td>
						
						<td><?php echo $row->sophong ?></td>
							
						<td><?php echo $row->ngaydatphong; ?></td>	
						
						
						<td class="option">
						
							 <a href="<?php echo site_url('admin/Quanlydatphong/Danhsachdatphong/'.$row->iddatphong); ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Quanlydatphong/del_iddatphong/'.$row->iddatphong); ?>" title="Xóa" class="tipS verify_action">
							    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
							</a>
						</td>
					</tr>

				<?php } ?>
				
			</tbody>
		</table>
		</form>
	</div>
	
	
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Đã xử lý</h6>
			
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số đặt phòng</td>
					<td style="width:80px;">Mã khách hàng</td>
					<td style="width:80px;">Loại phòng</td>
					<td>Ngày đến</td>
					<td>Ngày đi</td>
					<td style="width:80px;">Số người</td>
					<td style="width:80px;">Số phòng</td>
				
					<td>Ngày đặt phòng</td>
					
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot>
 			
				<tr>
					<td colspan="10">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
							
					     <div class="pagination">
			               			            </div>
					</td>
				</tr>
		      
			</tfoot>
 			
			<tbody>
				<!-- Filter -->
				<?php foreach ($r as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->iddatphong; ?>"></td>
						
						<td class="textC"><?php echo $row->iddatphong; ?></td>	
						<td class="textC"><?php echo $row->idkhachhang; ?></td>						
						
						<td><span title="" class="tipS"><?php echo $row->idphong; ?></span></td>
						
						<td><?php echo $row->ngayden ?></td>
						<td><?php echo $row->ngaydi ?></td>
						<td><span title="" class="tipS"><?php echo $row->songuoi ?></span></td>
						
						<td><?php echo $row->sophong ?></td>
						
						<td><?php echo $row->ngaydatphong; ?></td>	
						
						
						<td class="option">
						
							 <a href="<?php echo site_url('admin/Quanlydatphong/Danhsachdatphong/'.$row->iddatphong); ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Quanlydatphong/del_iddatphong/'.$row->iddatphong); ?>" title="Xóa" class="tipS verify_action">
							    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
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
						<h6>Cập nhật tình trạng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					  
					
					     
	 <div class="formRow">
    	<label class="formLeft" for="param_name">Số đặt phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($datphong->iddatphong) ? $datphong->iddatphong: NULL ?>" name="iddatphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('iddatphong') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tổng ngày:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($datphong->tongngay) ? $datphong->tongngay: NULL ?>" name="iddatphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('tongngay') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tổng tiền:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($datphong->tongtien) ? $datphong->tongtien: NULL ?>" name="iddatphong" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('tongtien') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tình trạng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($datphong->tinhtrang) ? $datphong->tinhtrang: NULL ?>" name="tinhtrang" id="param_name" _autocheck="true" type="text"  readonly="readonly"></span>  	   
		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name"><span class="req"></span></label>
    	<div class="formRight">
    	    
    		   
    		
    		<select class="" name= "tinhtrang" style="width:120px; height: 20px;">
    		       <?php echo "<option value =\"Chưa xử lý\">Chưa xử lý</option>"; ?>
                  <?php echo "<option value =\"Đã xử lý\">Đã xử lý</option>"; ?>
                                                   
            </select>       
    		
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


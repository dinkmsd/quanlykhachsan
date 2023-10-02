<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách hóa đơn trả phòng</h6>
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số hóa đơn trả phòng</td>
					<td style="width:80px;">Số hóa đơn nhận phòng</td>
					<td style="width:80px;">Mã khách hàng</td>
					<td style="width:80px;">Phòng số</td>
				
					<td>Ngày trả phòng</td>
					
					<td>Tổng tiền</td>
					<td style="width:100px;">Nhân viên lập</td>
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
				<?php foreach ($this->Hoadon_traphong_Model->gettable('hoadon_traphong') as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->idhoadon_traphong; ?>"></td>
						
						<td class="textC"><?php echo $row->idhoadon_traphong; ?></td>
						<td class="textC"><?php echo $row->idhoadon_nhanphong; ?></td>
								
						<td class="textC"><?php echo $row->idkhachhang; ?></td>						
						
						<td><span title="" class="tipS"><?php echo $row->idphong_chothue; ?></span></td>
						
					
						<td class="textC"><?php echo $row->ngaytraphong; ?></td>
						
						
						<td class="option"><?php echo $row->tongtien; ?></td>
						<td class="option"><?php echo $row->id_nguoilap; ?></td>
						
						<td class="option">
						
							 <a href="<?php echo site_url('admin/Hoadontraphong/Hoadon_traphong/').$row->idhoadon_traphong; ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Hoadontraphong/Xoa_Hoadon_traphong/').$row->idhoadon_traphong; ?>" title="Xóa" class="tipS verify_action">
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
						<h6>Cập nhật giá phòng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					  
					
					     
	 <div class="formRow">
    	<label class="formLeft" for="param_name">Số hóa đơn trả phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($traphong->idhoadon_traphong) ? $traphong->idhoadon_traphong: NULL ?>" name="idhoadon" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('idhoadon') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày nhận phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($traphong->ngaynhanphong) ? $traphong->ngaynhanphong: NULL ?>" name="songayo" id="param_name" _autocheck="true" type="text"  readonly="readonly"></span>  	   
		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name">Ngày trả phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($traphong->ngaytraphong) ? $traphong->ngaytraphong: NULL ?>" name="songayo" id="param_name" _autocheck="true" type="text"  readonly="readonly"></span>  	   
		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
     
     <div class="formRow">
    	<label class="formLeft" for="param_name">Số ngày ở:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($traphong->songayo) ? $traphong->songayo: NULL ?>" name="songayo" id="param_name" _autocheck="true" type="text"  readonly="readonly"></span>  	   
		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Giá phòng:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($traphong->giaphong) ? $traphong->giaphong: NULL ?>" name="giaphong" id="param_name" _autocheck="true" type="text"  ></span>  	   
		      <span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('giaphong') ?></span>
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


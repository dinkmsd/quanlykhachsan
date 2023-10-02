<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Chưa xử lý</h6>
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
			
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số hóa đơn nhận phòng</td>
					<td style="width:80px;">Mã khách hàng</td>
					<td style="width:80px;">Phòng số</td>
					<td>Ngày nhận phòng</td>
					<td>Số người</td>
				
					<td style="width:100px;">Tình trạng</td>
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
				<?php foreach ($rr as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->idhoadon_nhanphong; ?>"></td>
						
						<td class="textC"><?php echo $row->idhoadon_nhanphong; ?></td>		
						<td class="textC"><?php echo $row->idkhachhang; ?></td>						
						
						<td><span title="" class="tipS"><?php echo $row->idphong_chothue; ?></span></td>
						
						<td class="textC"><?php echo $row->ngaynhanphong; ?></td>
						<td><?php echo $row->songuoi; ?></td>
						
						
					
						<td class="option"><?php echo $row->tinhtrang; ?></td>
						<td class="option"><?php echo $row->id_nguoilap; ?></td>
						
						<td class="option">
						
							
							<a href="<?php echo site_url('admin/Hoadontraphong/Them_Hoadon_traphong/').$row->idhoadon_nhanphong; ?>" title="Thêm HD trả phòng" class="tipS ">
							    <img src="<?php echo public_url('admin/') ?>images/icons/color/Text-Edit-icon1.png">
							</a>
							<a href="<?php echo site_url('admin/Hoadonnhanphong/Xoa_Hoadon_nhanphong/').$row->idhoadon_nhanphong; ?>" title="Xóa" class="tipS verify_action">
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
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_datphong'); ?></h6>
		 	<h6 style="margin-left: 85px; color: red;"><?php echo $this->session->flashdata('flash_xoa'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số hóa đơn nhận phòng</td>
					<td style="width:80px;">Mã khách hàng</td>
					<td style="width:80px;">Phòng số</td>
					<td>Ngày nhận phòng</td>
					<td>Số người</td>
				
					<td style="width:100px;">Tình trạng</td>
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
				<?php foreach ($r as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->idhoadon_nhanphong; ?>"></td>
						
						<td class="textC"><?php echo $row->idhoadon_nhanphong; ?></td>		
						<td class="textC"><?php echo $row->idkhachhang; ?></td>						
						
						<td><span title="" class="tipS"><?php echo $row->idphong_chothue; ?></span></td>
						
						<td class="textC"><?php echo $row->ngaynhanphong; ?></td>
						<td><?php echo $row->songuoi; ?></td>
						
						
						
						<td class="option"><?php echo $row->tinhtrang; ?></td>
						<td class="textC"><?php echo $row->id_nguoilap; ?></td>
						<td class="option">
						
							<a href="<?php echo site_url('admin/Hoadontraphong/Them_Hoadon_traphong/').$row->idhoadon_nhanphong; ?>" title="Thêm HD trả phòng" class="tipS ">
							    <img src="<?php echo public_url('admin/') ?>images/icons/color/Text-Edit-icon1.png">
							</a>
							
							<a href="<?php echo site_url('admin/Hoadonnhanphong/Xoa_Hoadon_nhanphong/').$row->idhoadon_nhanphong; ?>" title="Xóa" class="tipS verify_action">
							    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
							</a>
							
							
						</td>
					</tr>

				<?php } ?>
				
			</tbody>
		</table>
		</form>
	</div>
	
	
	
	
	
	
    
    
    
    
</div>


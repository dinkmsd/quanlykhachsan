<div class="wrapper">
	
	<div class="widgets">
	     <!-- Stats -->
		



<!-- User -->
<div class="oneTwo">
	<div class="widget">
		<div class="title">
			<img src="<?php echo public_url('admin/images/'); ?>icons/dark/users.png" class="titleIcon">
			<h6>Thống kê dữ liệu</h6>
		</div>
		
		<table class="sTable myTable" width="100%" cellspacing="0" cellpadding="0">
			<tbody>
				
				
				
				<tr>
					<td>
						<div class="left">Tổng số nhân viên</div>
						<div class="right f11"><a href="admin/user.html">Chi tiết</a></div>
					</td>
					
					<td class="textC webStatsLink">
						<?php echo $this->db->count_all('nhanvien'); ?>					</td>
				</tr>
				<tr>
					<td>
						<div class="left">Tổng số phòng</div>
						<div class="right f11"><a href="admin/contact.html">Chi tiết</a></div>
					</td>
					
					<td class="textC webStatsLink">	<?php echo $this->db->count_all('phongchothue'); ?>	 </td>
				</tr>
				<tr>
					<td>
						<div class="left">Tổng số khách hàng</div>
						<div class="right f11"><a href="admin/contact.html">Chi tiết</a></div>
					</td>
					
					<td class="textC webStatsLink">	<?php echo $this->db->count_all('khachhang'); ?>	 </td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>

		<div class="clear"></div>
		
		<!-- Giao dich thanh cong gan day nhat -->
		
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách đặt phòng chưa xử lý</h6>
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
				
					<td>Hành động</td>
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
	
	
	
	</div>
	
</div>
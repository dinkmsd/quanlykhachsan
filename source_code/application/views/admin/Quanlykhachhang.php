<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách khách hàng</h6>
			<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
			<h6 style="margin-left: 78px; color: red;"><?php echo $this->session->flashdata('flash_xoa'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Mã khách hàng</td>
					<td>Họ tên</td>
					<td>Ngày sinh</td>
					<td>Giới tính</td>
					<td>Email</td>
					<td>Điện thoại</td>
					<td>CMND</td>
					<td>Tài khoản</td>
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
				<?php foreach ($this->Khachhang_Model->gettable('khachhang') as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id; ?>"></td>
						
						<td class="textC"><?php echo $row->id; ?></td>						
						
						<td><span title="Hoàng văn Tuyền" class="tipS"><?php echo $row->hoten; ?></span></td>
						
						<td><?php echo $row->ngaysinh; ?></td>
						<td><?php echo $row->gioitinh; ?></td>
						<td><span title="" class="tipS"><?php echo $row->email; ?></span></td>
						
						<td><?php echo $row->sdt; ?></td>
						<td><?php echo $row->cmnd; ?></td>
						<td><?php echo $row->user; ?></td>			
						
						<td class="option">
							 <a href="<?php echo site_url('admin/Quanlykhachhang/Suakhachhang/').$row->id ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Quanlykhachhang/del_khachhang/').$row->id; ?>" title="Xóa" class="tipS verify_action">
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
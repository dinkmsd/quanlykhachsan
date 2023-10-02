<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Bảng lương</h6>
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_tinhluong'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số bảng lương</td>
					<td style="width:80px;">Mã nhân viên</td>
					<td style="width:80px;">Ngày làm việc</td>
					
				    <td style="width:100px;">Lương cứng / 1 tháng</td>
				   
				    <td>Ghi chú</td>
							
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
					<?php foreach ($this->Bangluong_Model->gettable('bangluong') as $row) {?>   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id_bangluong; ?>"></td>
						
						<td class="textC"><?php echo $row->id_bangluong; ?></td>	
						<td class="textC"><?php echo $row->id_nhanvien; ?></td>		
						<td class="textC"><?php echo $row->ngaylamviec; ?></td>						
						
						<td class="option"><?php echo $row->luongcung; ?></td>					
				
						<td class="option"><?php echo $row->ghichu; ?></td>
					
						
						<td class="option">
						
							 <a href="" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Bangluong/Xoabangluong/').$row->id_bangluong; ?>" title="Xóa" class="tipS verify_action">
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


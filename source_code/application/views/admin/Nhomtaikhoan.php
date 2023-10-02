<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách nhân viên</h6>
			<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Mã nhóm tài khoản</td>
					<td>Trách nhiệm</td>
				
				</tr>
			</thead>
			
 			
 			
			<tbody>
				<!-- Filter -->
				<?php foreach ($this->Login_Model->gettable('admin_group') as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id; ?>"></td>
						
						<td class="textC"><?php echo $row->id; ?></td>	
						<td class="textC"><?php echo $row->name; ?></td>						
							
						
						
					
						
						
						
						
						

				<?php } ?>
				
			</tbody>
		</table>
		</form>
	</div>
</div>
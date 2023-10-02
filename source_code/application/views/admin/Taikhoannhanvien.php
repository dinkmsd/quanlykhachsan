<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Danh sách tài khoản nhân viên</h6>
			<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_dangki'); ?></h6>
			<h6 style="margin-left: 78px; color: red;"><?php echo $this->session->flashdata('flash_xoa'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Mã tài khoản</td>
					<td>Tài khoản</td>
					<td>Mật khẩu</td>
					<td>Mã nhân viên</td>
					<td>Nhóm tài khoản</td>
					
					
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
				<?php foreach ($this->Login_Model->gettable('admin') as $row) {?>			   
 			        
					<tr>
						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id; ?>"></td>
						
						<td class="textC"><?php echo $row->id; ?></td>						
						
						<td><span title="Hoàng văn Tuyền" class="tipS"><?php echo $row->user; ?></span></td>
						
						<td><?php echo $row->pass; ?></td>
						<td><?php echo $row->id_nhanvien; ?></td>
						<td><span title="" class="tipS"><?php echo $row->admin_group_id; ?></span></td>
						
						
						
						
						<td class="option">
							 <a href="<?php echo site_url('admin/Quantri/Taikhoannhanvien/').$row->id; ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?php echo public_url('admin/') ?>images/icons/color/edit.png">
							</a>
							
							<a href="<?php echo site_url('admin/Quantri/Xoataikhoannhanvien/').$row->id; ?>" title="Xóa" class="tipS verify_action">
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
						<h6>Cập nhật tài khoản nhân viên</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					     
					     
					     
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tài khoản:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($nhanvien->user) ? $nhanvien->user: NULL ?>" name="user" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('user') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Mật khẩu mới:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="" name="pass" id="param_name" _autocheck="true" type="password" ></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('pass') ?></span>
    		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Nhập lại mật khẩu:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><input name="repass" id="param_name" value="" _autocheck="true" type="password"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('repass') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Nhóm tài khoản:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($nhanvien->admin_group_id) ? $nhanvien->admin_group_id: NULL ?>" name="admin_group_id" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
     <div class="formRow">
    	<label class="formLeft" for="param_name"><span class="req"></span></label>
    	<div class="formRight">
    	    
    		   
    		
    		 <select style="width:103px;" name="admin_group_id">
                                 <?php
                                    foreach ($this->Nhomtaikhoan_Model->gettable('admin_group') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->id</option>";
                                    }
                                 ?>
                                    
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
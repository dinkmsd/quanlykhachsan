<div class="wrapper">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input id="checkboxall" name="titleCheck" type="checkbox"></span>
			<h6>Phản hồi của khách hàng</h6>
			<h6 style="margin-left: 85px; color: blue;"><?php echo $this->session->flashdata('flash_xoa'); ?></h6>
		 	
		</div>
		
		<form action="http://localhost/webphp/index.php/admin/user.html" method="get" class="form" name="filter">
		<table class="sTable mTable myTable withCheck" id="checkAll" width="100%" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin/') ?>images/icons/tableArrows.png"></td>
					<td style="width:80px;">Số phản hồi</td>
					<td style="width:80px;">Họ tên</td>
					<td style="width:80px;">Email</td>					
					<td style="width:80px;">Số điện thoại</td>
					<td style="width:80px;">Tiêu đề</td>
					
					<td style="width:80px;">Gởi lúc</td>
				
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
				
			<?php foreach ($this->Phanhoi_Model->gettable('phanhoi') as $row) {?>
 			       
    					<tr  <?php if($row->tinhtrang == 'Đã xử lý') echo "style = \"opacity:0.5;\" "; else echo "style = \"font-weight: bold;\" ";?> >
    						<td><input name="id[]" value="19" type="checkbox" value="<?php echo $row->id; ?>"></td>
    						
    						<td class="textC"><?php echo $row->id; ?></td>		
    						<td class="textC"><?php echo $row->hoten; ?></td>						
    						<td><span title="" class="tipS"><?php echo $row->email; ?></span></td>						
    						<td><?php echo $row->sdt ?></td>
    						<td><?php echo $row->tieude ?></td>
    						
    						<td class="option"><?php echo $row->date; ?></td>
    						
    						
    						<td class="option">
    						
    						    <a  href="<?php echo site_url('admin/Hotrovalienhe/Phan_hoi/').$row->id; ?>" title="Xem nội dung" class="tipS ">
    							    <img src="<?php echo public_url('admin/') ?>images/Actions-view-process-all-icon.png">
    							</a>
    							
    						  
    							 <a href="<?php echo site_url('admin/Guiemail/Gui_email/').$row->id ?>"  title="Phản hồi cho khách hàng" class="tipS ">
    							<img  src="<?php echo public_url('admin/') ?>images/icons/color/Text-Edit-icon1.png">
    							</a>
    							
    							
    							<a  href="<?php echo  site_url('admin/Hotrovalienhe/del_phanhoi/').$row->id; ?>" title="Xóa" class="tipS verify_action">
    							    <img src="<?php echo public_url('admin/') ?>images/icons/color/delete.png">
    							</a>
    						</td>
    					</tr>
                 
				<?php }?>
				
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
						<h6>Xem nội dung</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
				   
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					  
					
					     
	 <div class="formRow">
    	<label class="formLeft" for="param_name">Số phản hồi:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($noidung->id) ? $noidung->id: NULL ?>" name="id" id="param_name" _autocheck="true" type="text" readonly="readonly"></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('id') ?></span>
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Tiêu đề:<span class="req">*</span></label>
    	<div class="formRight">
    	    
    		<span class="oneTwo"><input value ="<?php echo isset($noidung->tieude) ? $noidung->tieude: NULL ?>" name="tinhtrang" id="param_name" _autocheck="true" type="text"  readonly="readonly"></span>  	   
		
    		<div name="name_error" class="clear error"></div>
    	</div>
    	<div class="clear"></div>
    </div>
    
    <div class="formRow">
    	<label class="formLeft" for="param_name">Nội dung:<span class="req">*</span></label>
    	<div class="formRight">
    		<span class="oneTwo"><textarea rows="3" cols="20" name="diachi" id="param_name" value="" _autocheck="true" type="text" readonly="readonly"><?php echo isset($noidung->noidung) ? $noidung->noidung: NULL ?></textarea></span>
    		<span name="name_autocheck" class="autocheck" style="color:red;"><?php echo form_error('diachi') ?></span>
    		<div name="name_error" class="clear error"></div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
    
    
   
    
    
    
		
	        		</div><!-- End tab_container-->
	        		
	        		
				</div>
			</fieldset>
		</form>
	
	
	
	
</div>


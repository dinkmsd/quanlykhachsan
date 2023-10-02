<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
						<h6>Chi tiết phòng</h6>
						<h6 style="margin-left: 78px; color: blue;"><?php echo $this->session->flashdata('flash_capnhat'); ?></h6>
					</div>
					
			<?php echo $calendar; ?>
						   
	         <script type="text/javascript">
    	         $(document).ready(function(){
    		      	   $('.calendar .day').click(function(){
          		      		 day_num =$(this).find('.day_num').html();
        		      		 day_data = prompt('Nội dung', $(this).find('.content').html());
        		      		 if(day_data!=null)
        		      		 {
            		      		 $.ajax({
             		      		    url: window.location,
             		      		    type: 'POST',
             		      		    data:{
                 		      		    day: day_num,
                 		      		    data: day_data
             		      		    },
             		      		    success: function(msg)
             		      		    {
                 		      		    location.reload();
                 		      		}

             		      		 });
        		      		 }
        		      	   });    	   
    		      });
    	         
	         </script>
	        		
			</fieldset>
		</form>
</div>
<div class="wrapper">

    
     
    <div class="widget">
        <div class="title">
            <img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
            
            <h6><a href="<?php echo site_url("admin/Quanlyphong/Loaiphong/"."1"); ?>">Phòng thường 1 giường đơn</a></h6>
          
        </div>
       <?php foreach ($id1 as $row){ ?>
        <div style="float:left;">
            <a href="<?php echo site_url("admin/Quanlyphong/Chitietphong/".$row->idphong_chothue.'/2016/11'); ?>"><img src="<?php echo public_url('admin/'); ?>images/p.png" width="195px" height ="150px" style="padding-left: 15px;"></a>
            <br/><span style="margin-left: 70px; font-weight: bold;">Mã phòng: </span><span><?php echo $row->idphong_chothue ;?></span><br/>
             <span style="margin-left: 40px; font-weight: bold;"><a style="text-decoration: underline; color: green;" href="<?php echo site_url('admin/Quanlyphong/Suaphong/'.$row->idphong_chothue) ?>">Tình trạng: </a></span><span><?php echo $row->tinhtrang ;?></span><br/>
            
        </div>
        <?php }?>
             	   	
    </div>
    
    
   <div class="widget">
        <div class="title">
            <img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
            <h6><a href="<?php echo site_url("admin/Quanlyphong/Loaiphong/"."2"); ?>">Phòng thường 1 giường đôi</a></h6>
           
        </div>
        <?php foreach ($id2 as $row){ ?>
        <div style="float:left;">
            <a href="<?php echo site_url("admin/Quanlyphong/Chitietphong/".$row->idphong_chothue); ?>"><img src="<?php echo public_url('admin/'); ?>images/p.png" width="195px" height ="150px" style="padding-left: 15px;"></a>
            <br/><span style="margin-left: 70px; font-weight: bold;">Mã phòng: </span><span><?php echo $row->idphong_chothue ;?></span><br/>
            <span style="margin-left: 40px; font-weight: bold;"><a style="text-decoration: underline; color: green;" href="<?php echo site_url('admin/Quanlyphong/Suaphong/'.$row->idphong_chothue) ?>">Tình trạng: </a></span><span><?php echo $row->tinhtrang ;?></span><br/>
            
        </div>
        <?php }?>
             	   	
    </div>
    
    
    <div class="widget">
        <div class="title">
            <img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
            <h6><a href="<?php echo site_url("admin/Quanlyphong/Loaiphong/"."3"); ?>">Phòng VIP 1 giường đơn</a></h6>
           
        </div>
        <?php foreach ($id3 as $row){ ?>
        <div style="float:left;">
            <a href="<?php echo site_url("admin/Quanlyphong/Chitietphong/".$row->idphong_chothue); ?>"><img src="<?php echo public_url('admin/'); ?>images/p.png" width="195px" height ="150px" height ="150px" style="padding-left: 15px;"></a>
            <br/><span style="margin-left: 70px; font-weight: bold;">Mã phòng: </span><span><?php echo $row->idphong_chothue ;?></span><br/>
             <span style="margin-left: 40px; font-weight: bold;"><a style="text-decoration: underline; color: green;" href="<?php echo site_url('admin/Quanlyphong/Suaphong/'.$row->idphong_chothue) ?>">Tình trạng: </a></span><span><?php echo $row->tinhtrang ;?></span><br/>
            
        </div>
        <?php }?>
             	   	
    </div>
    
    <div class="widget">
        <div class="title">
            <img src="<?php echo public_url('admin/'); ?>images/icons/dark/add.png" class="titleIcon">
           <h6><a href="<?php echo site_url("admin/Quanlyphong/Loaiphong/"."4"); ?>">Phòng VIP 1 giường đôi</a></h6>
           
        </div>
        <?php foreach ($id4 as $row){ ?>
        <div style="float:left;">
            <a href="<?php echo site_url("admin/Quanlyphong/Chitietphong/".$row->idphong_chothue); ?>"><img src="<?php echo public_url('admin/'); ?>images/p.png" width="195px" height ="150px" style="padding-left: 15px;"></a>
            <br/><span style="margin-left: 70px; font-weight: bold;">Mã phòng: </span><span><?php echo $row->idphong_chothue ;?></span><br/>
              <span style="margin-left: 40px; font-weight: bold;"><a style="text-decoration: underline; color: green;" href="<?php echo site_url('admin/Quanlyphong/Suaphong/'.$row->idphong_chothue) ?>">Tình trạng: </a></span><span><?php echo $row->tinhtrang ;?></span><br/>
            
        </div>
        <?php }?>
             	   	
    </div>
    
    
             	   	
    </div>
               	   	
    </div>
   	
    
    	 
</div>
<div class="colLeft fl">
            <h2 class="bigTitle">Buồng phòng</h2>
             <?php foreach ($this->Buongphong_Model->gettable('phong') as $row)
              { ?>
            <div style="width:600px">        
            	<div class="listProductItem">
                    <div class="listProductImage">
                        <a href="<?php echo site_url('site/Chitiet/Chi_tiet/').$row->id ?>"><img src="<?php echo public_url() . $row->hinhanh;?>" /></a>
                    </div>
                    <div class="listProductInfo">                            
                            <a href="<?php echo site_url('Hsite/Chitiet/Chi_tiet/').$row->id ?>"><?php echo $row->tenloaiphong; ?></a>
                            <div class="priceTag"><?php echo $row->giaphong; ?></div>
                            <p><?php echo $row->mota; ?></p>
                            <a href="<?php echo site_url('site/Chitiet/Chi_tiet/').$row->id ?>" class="listProductMore">Thông tin chi tiết</a>                 
                    </div>    
                </div>               
            	</div>
            <?php } ?>
        </div>
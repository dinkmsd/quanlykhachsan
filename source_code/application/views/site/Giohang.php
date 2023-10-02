<div class="colLeft fl">
            <h2 class="bigTitle">Thông tin đặt phòng</h2>
                
                         <div class="priceTable">                 
                       <table border="0" cellpadding="0" cellspacing="0">
            	
                          <tr align="center" style="color:brown; font-weight:bold; ">
                            <th>Số đặt phòng</th>
                            <th>Ngày đến</th>
                            <th>Ngày đi</th>
                            <th>Số người</th>
                            <th>Số phòng</th>
                            <th>Loại phòng</th> 
                            <th>Số ngày</th>                          
                            <th>Tổng tiền</th>                           
                            <th >Xóa</th>
                          </tr>
                           <?php foreach ($r as $row) {?>
                          <tr align="center">
                            <td><?php echo $row->iddatphong; ?></td>
                            <td><?php echo $row->ngayden; ?></td>
                            <td><?php echo $row->ngaydi; ?></td>
                            <td><?php echo $row->songuoi; ?></td>
                            <td><?php echo $row->sophong ?></td>
                            <td><?php echo $row->tenloaiphong; ?></td>
                            <td><?php echo $row->tongngay; ?></td>                      
                            <td><?php echo $row->tongtien; ?></td>                        
                            <td><a href="<?php echo site_url('site/Giohang/del_giohang/').$row->iddatphong; ?>" onclick='return xacnhan();'>Xóa</a></td>
                           
                            
                          </tr>
                          <?php }?>
                          
                         
                      </table>
                      </div>
                    
               
            
        </div>
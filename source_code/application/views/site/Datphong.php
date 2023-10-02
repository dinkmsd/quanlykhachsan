<div class="colLeft fl">
            <h2 class="bigTitle">Đặt phòng</h2>
                <div class="bookingPage">
                    <form method="post" action="">
                        <ul class="bookingFormContent">
                        	<li>
                        	     <div style="color: blue; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_datphong'); ?></div>
                        	     <div style="color: red; margin-left: 114px; font-size: 15px; font-weight: bold;"><?php echo $this->session->flashdata('flash_dates'); ?></div>
                        	      
                            	<label>Ngày đến:</label>
                                <select class="" name="ngayden" style="width:103px;">
                                   <?php for ($i = 1; $i<=31; $i++) 
                                   {
                                        if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                   }
                                   ?>
                                </select>
                                <select class="" name="thangden" style="width:103px;">
                                     <?php for ($i = 1; $i<=12; $i++) 
                                   {
                                        if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                   }
                                   ?>
                                </select>
                                <select class="" name="namden" style="width:103px;">
                                   
                                     <?php for ($i = 2016; $i<=2030; $i++) 
                                   {
                                       echo " <option value=\"$i\">$i</option>";
                                   }
                                   ?>
                                </select>
                            </li>
                        	<li>
                            	<label>Ngày đi:</label>
                                 <select class="" name="ngaydi" style="width:103px;">
                                   <?php for ($i = 1; $i<=31; $i++) 
                                   {   
                                       if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                       
                                   }
                                   ?>
                                </select>
                                <select class="" name="thangdi" style="width:103px;">
                                     <?php for ($i = 1; $i<=12; $i++) 
                                   {
                                       if($i<10)
                                       {
                                           echo " <option value=\"$i\">0$i</option>";
                                       }
                                       else{
                                           echo " <option value=\"$i\">$i</option>";
                                       }
                                   }
                                   ?>
                                </select>
                                <select class="" name="namdi" style="width:103px;">
                                   
                                     <?php for ($i = 2016; $i<=2030; $i++) 
                                   {
                                       echo " <option value=\"$i\">$i</option>";
                                   }
                                   ?>
                                </select>
                            </li>
                        	<li>
                            	<label>Số người:</label>
                            	<input style=" margin-left: 10px; width:103px;" type="number" min="1" name="songuoi" value="2"/>
                                
                            </li>
                            <li>
                            	<label>Số phòng:</label>
                                <input style="margin-left: 10px; width:103px;" type="number" min="1" name="sophong" value="1"/>
                            </li>
                        	<li>
                            	<label>Loại phòng:</label>
                                <select style="width:350px;" name="idphong">
                                 <?php
                                    foreach ($this->Buongphong_Model->gettable('phong') as $row)
                                    {
                                        echo " <option  value=\"$row->id\">$row->tenloaiphong</option>";
                                    }
                                 ?>
                                    
                                </select>
                            </li>
                        	
                        	
                        	
                        	<li>
                            	<label>&nbsp;</label>
                                <input class="" type="submit" value="Đặt phòng" id="" name="">
                            </li>
                            
                        </ul>
                    </form>
                </div>
            
        </div>
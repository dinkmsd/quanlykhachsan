 <h2 class="bigTitle">Đặt phòng</h2>
<div class="bookingPage">
{if $msg}<p style="color:red;">{$msg}</p>{/if}
                    <ul class="bookingFormContent">
                    <form method="post" onsubmit="return validateForm(this);" action="{"index.php?mod=cart&task=send_request"|url_friendly}">
                    	<li>
                        	<label>Ngày đến:</label>
                           {html_select_date month_value_format="%m" prefix=From_ display_years=false time=$time start_year='-90' end_year='+1'}
            
                        </li>
                    	<li>
                        	<label>Ngày đi:</label>
{html_select_date month_value_format="%m"  prefix=To_ display_years=false time=$time start_year='-90' end_year='+1'}
                        </li>
                    	<li>
                        	<label>Số người:</label>
                            <select name="number_people"  style="width:115px; margin:0 10px 0;">
                                <option value=""></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        	<label>Số phòng:</label>
                            <select name="number_room"  style="width:115px; margin:0 10px 0;">
                                <option value=""></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </li>
                    	<li>
                        	<label>Loại phòng:</label>
                            <select name="type_room" style="width:220px;">
                                {section name=foo loop=$room}
                                {assign var=id value=$room[foo].Product_ID}
                                <option {if ($smarty.get.room) == $id}selected="selected"{/if}>{$room[foo].Product_Title}</option>
                                {/section}
                            </select>
                        </li>
                    	<li>
                        	<label>Họ tên:</label>
                            <input class="" type="text" value="" id="" name="full_name"  style="width:350px;">
                        </li>
                    	<li>
                        	<label>Điện thoại:</label>
                            <input class="" type="text" value="" id="" name="phone_number"  style="width:350px;">
                        </li>
                    	<li>
                        	<label>Email:</label>
                            <input class="" type="text" value="" id="" name="email"  style="width:350px;">
                        </li>
                    	<li>
                        	<label class="fl">Thông tin thêm:</label>
                            <textarea name="message" style="width:350px;"></textarea>
                        </li>
                    	<li>
                        	<label>Mã bảo mật</label>
                        	<label style="width:50px; margin:0 0 0 10px;">{$security.a} + {$security.b} = </label>
                            <input type="hidden" name="hid_keycapcha" value="{$security.c}" />
                            <input class="" type="text" value="" id="" name="scurity_code" style="width:50px;">
                            
                        </li>
                    	<li>
                        	<label>&nbsp;</label>
                            <input class="" type="submit" value="Đặt phòng" id="" name="">
                        </li>
                    </ul></form>
                </div>
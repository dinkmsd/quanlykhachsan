<div class="bookingFormOutline">
                <div class="bookingForm">
                    <h2 class="bookingFormTitle">Đặt phòng trực tuyến</h2>
                    <form method="post" onsubmit="return validateForm(this);" action="{"index.php?mod=cart&task=send_request"|url_friendly}">
                    <ul class="bookingFormContent">
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
                            <select name="number_people" style="width:60px; margin:0 10px 0;">
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
                            <select name="number_room" style="width:55px;">
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
                                <option>Phòng VIP</option>
                                <option>Phòng thường</option>
                                <option>Phòng gia đình</option>
                            </select>
                        </li>
                    	<li>
                        	<label>Họ tên:</label>
                            <input class="" type="text" value="" id="" name="full_name">
                        </li>
                    	<li>
                        	<label>Điện thoại:</label>
                            <input class="" type="text" value="" id="" name="phone_number">
                        </li>
                    	<li>
                        	<label>Email:</label>
                            <input class="" type="text" value="" id="" name="email">
                        </li>
                    	<li>
                            <input class="fr" type="submit" value="Đặt phòng" id="" name="">
                        </li>
                    </ul>
                </div>
                </form>
            </div>
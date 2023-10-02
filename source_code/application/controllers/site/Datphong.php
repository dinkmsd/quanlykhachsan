<?php
require_once APPPATH . 'core/My_Controller.php';
class Datphong extends My_Controller
{
    public function Dat_phong()
    {
        if($this->session->userdata('login') == null)
        {
            $this->session->set_flashdata('flash_datphong', 'Đăng nhập trước khi đặt phòng !!!');
            redirect('site/Dangnhap/Dang_nhap');
        }
        
        if($this->input->post())
        {
           
                $ngayden = $this->input->post('ngayden');
                $thangden = $this->input->post('thangden');
                $namden = $this->input->post('namden');
                 
                $datesden = "$ngayden/$thangden/$namden";
                $datesdennguoc="$namden/$thangden/$ngayden";
                
                $ngaydi = $this->input->post('ngaydi');
                $thangdi = $this->input->post('thangdi');
                $namdi = $this->input->post('namdi');
                 
                $datesdi = "$ngaydi/$thangdi/$namdi";
                $datesdinguoc = "$namdi/$thangdi/$ngaydi";
                
                /*$now = time();*/
                
                $daydi = date("d/m/Y", strtotime($datesdi)) ;
                $dayden = date("d/m/Y", strtotime($datesden));
               
                $days_between = (strtotime($datesdinguoc)- strtotime($datesdennguoc))/24/3600;
                
                $date = date('d/m/Y H:i:s');
                
                $now = date('d/m/Y');
                
                $where = $this->input->post('idphong');
                $field = 'gp';
                $info = $this->Buongphong_Model->get_info($where,$field);
                
                $sophong = $this->input->post('sophong');
               
                
                $tongtien = ceil($days_between) * $sophong  *  $info->gp;
                
                if( (date("Y-m-d", strtotime($datesdinguoc)) > date("Y-m-d", strtotime($datesdennguoc))) and (date("Y-m-d", strtotime($datesdennguoc)) > date('Y-m-d')) )
                {
                    $this->data = array(
                        'idkhachhang' => $this->session->userdata('login')->id,
                        'idphong' => $this->input->post('idphong'),
                        'ngayden' =>$datesden,
                        'ngaydi' =>$datesdi,
                        'songuoi' =>$this->input->post('songuoi'),
                        'sophong' =>$this->input->post('sophong'),
                        'tongngay' => $days_between,
                        'ngaydatphong' => $date,
                        'tongtien' => number_format($tongtien),
                        'tinhtrang' => 'Chưa xử lý'
                   );
                    
                    
                     
                    if($this->Datphong_Model->create($this->data))
                    {
                        $this->session->set_flashdata('flash_datphong' ,'Đặt phòng thành công. Nhân viên của chúng tôi sẽ liên hệ với quý khách trong phòng 15 phút !!!');
                    }
                }
                
                else 
                {
                    $this->session->set_flashdata('flash_dates' ,'Ngày đến phải lớn hơn hiện tại và bé hơn ngày đi !!!');
                }
                
        }
        
        
        
        $this->data['title'] = "Đặt phòng";
        $this->data['left'] = "site/Datphong";
        $this->load->view($this->site, $this->data);
    }
}
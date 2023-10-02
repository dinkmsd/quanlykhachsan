<?php
require_once APPPATH . 'core/My_Controller.php';
class Thongtincanhan extends My_Controller
{
    public function Thongtin_canhan()
    {
        if($this->input->post())
        {
            $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
            $this->form_validation->set_rules('ngaysinh','Ngày sinh','required|xss_clean');
            $this->form_validation->set_rules('gioitinh','Giới tính','required|min_length[2]|max_length[3]|xss_clean');
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|max_length[15]|xss_clean');
           
            
            
            if($this->form_validation->run())
            {
               
                 
                $this->data = array(
                    'hoten' =>$this->input->post('hoten'),
                    'ngaysinh' =>$this->input->post('ngaysinh'),
                    'gioitinh' =>$this->input->post('gioitinh'),
                    'email' =>$this->input->post('email'),
                    'sdt' =>$this->input->post('sdt'),
                    'cmnd' =>$this->input->post('cmnd'),
                   
                );
                
                $where = $this->session->userdata('login')->id;
                
               
                
                if($this->Khachhang_Model->update($where,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                }
                
                $info = $this->Khachhang_Model->get_info($where);
                //lưu thông tin thành viên vào session
                $this->session->set_userdata('login', $info);
                
               
            }
        }
        
         
    
        $this->data['title'] = "Thông tin cá nhân";
        $this->data['left'] = "site/Thongtincanhan";
        $this->load->view($this->site, $this->data);
    }
    
    public function Doimatkhau()
    {       
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('pass_cu','Mật khẩu cũ','required|min_length[6]|callback_check_pass|xss_clean');
            $this->form_validation->set_rules('pass_moi','Mật khẩu mới','required|min_length[6]|xss_clean');
            $this->form_validation->set_rules('repass_moi','Xác nhận mật khẩu','required|matches[pass_moi]|min_length[6]|xss_clean');
        
        
        
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(                    
                    'pass' =>md5($this->input->post('pass_moi'))
                );
        
                $where = $this->session->userdata('login')->id;
        
                 
        
                if($this->Khachhang_Model->update($where,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                }
        
                $info = $this->Khachhang_Model->get_info($where);
                //lưu thông tin thành viên vào session
                $this->session->set_userdata('login', $info);
        
                 
            }
        }
        
        $this->data['title'] = "Đổi mật khẩu";
        $this->data['left'] = "site/Doimatkhau";
        $this->load->view($this->site, $this->data);
    }
    
    public function check_pass()
    {
        
        $user=  $this->session->userdata('login')->user;
        $pass = md5($this->input->post('pass_cu'));
       
        
        if(!$this->Khachhang_Model->role_exists($user,$pass))
        {
            $this->form_validation->set_message(__FUNCTION__, 'Sai mật khẩu cũ.');
            return FALSE;
        }
        return TRUE;
    }
}
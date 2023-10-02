<?php
require_once APPPATH . 'core/My_Controller.php';

class Dangnhap extends My_Controller
{
  
    
    public function Dang_nhap()
    {
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('user','Tài khoản','required|xss_clean');
            $this->form_validation->set_rules('pass','Mật khẩu','required|xss_clean');
            $this->form_validation->set_rules('login','Đăng nhập','callback_check_log');
            $this->form_validation->set_rules('dn','Khách hoặc nhân viên','required|xss_clean');
        
           
            
                if($this->form_validation->run())
                {
                    $user = $this->input->post('user');
                    $pass = $this->input->post('pass');
                    $pass = md5($pass);
                    $where = array(
                        'user' => $user,
                        'pass' => $pass
                    );
                    if($this->input->post('dn') == "Khách")
                    {
                        //lấy thông tin thành viên
                        $info = $this->Khachhang_Model->get_info_rule($where);
                        //lưu thông tin thành viên vào session
                        $this->session->set_userdata('login', $info);
     
                        $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
                        redirect('Trangchu/Trang_chu');
                    }
                    
                    else {
                    
                        //lấy thông tin thành viên
                        $info = $this->Login_Model->get_info_rule($where);
                        //lưu thông tin thành viên vào session
                    
                        $this->session->set_userdata('admin_login', $info);
                    
                        $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
                        redirect('admin/Main/Ma_in');
                    }
                
            
            }
            
           
        }
        
       
        
       
        $this->data['title'] = "Đăng nhập";
        $this->data['left'] = "site/Dangnhap";
        $this->load->view($this->site, $this->data);
    }
    
  
    public function check_log()
    {
    
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $pass = md5($pass);
        $where = array(
            'user' => $user,
            'pass' => $pass
        );
    
        if($this->input->post('dn') == "Khách")
        {
            if(!$this->Khachhang_Model->check_login($user,$pass,$where))
            {
                $this->form_validation->set_message(__FUNCTION__, "Đăng nhập không thành công !!!");
                return false;
            }
    
            return true;
        }
        else
        {
    
            if(!$this->Login_Model->check_login($user,$pass,$where))
            {
                $this->form_validation->set_message(__FUNCTION__, "Đăng nhập không thành công !!!");
                return false;
            }
    
            return true;
        }
    }
    
    private function user_is_login()
    {
        if($this->input->post('dn') == "Khách")
        {
            $user_data = $this->session->userdata('login');
            if(!$user_data)
            {
                return false;
            }
            return true;
        }
        else
        {
    
            $user_data = $this->session->userdata('admin_login');
            if(!$user_data)
            {
                return false;
            }
            return true;
        }
    }
    
    public function logout()
    {
    
        $this->session->sess_destroy();
    
        $this->session->set_flashdata('flash_message','Đăng xuất thành công');
        redirect('site/Dangnhap/Dang_nhap');
    }
    
    public function Quenmatkhau()
    {
        if($this->input->post())
        {
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');   
            $this->form_validation->set_rules('user','Tài khoản','required|callback_check|xss_clean');
            
        
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'noidung' =>$this->input->post('user'),
                    'tinhtrang' =>'Chưa xử lý',
                    'date' =>  date('d/m/Y H:i:s'),
                    'tieude' =>'Quên mật khẩu',
                    'email' =>$this->input->post('email'),
                );
        
                 if($this->Phanhoi_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_phanhoi' ,'Vui lòng check email để xem mật khẩu !!!');
                    
                }       
        
                 
            }
        }
        
        $this->data['title'] = "Quên mật khẩu";
        $this->data['left'] = "site/Quenmatkhau";
        $this->load->view($this->site, $this->data);
    }
    
    public function check()
    {
    
        $user= $this->input->post('user');
        $email = $this->input->post('email');
         
    
        if(!$this->Khachhang_Model->check_tt($user,$email))
        {
            $this->form_validation->set_message(__FUNCTION__);
            $this->session->set_flashdata('flash_check' ,'Email hoặc tài khoản không khớp !!!');
            return FALSE;
        }
        return TRUE;
    }
    
}
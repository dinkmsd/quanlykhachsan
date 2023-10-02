<?php
class Login extends My_Controller
{
    public function index()
    {
        
        if($this->input->post())
        {
           
            $this->form_validation->set_rules('user','Tài khoản','required|xss_clean');
            $this->form_validation->set_rules('pass','Mật khẩu','required|xss_clean');
            $this->form_validation->set_rules('login','Đăng nhập','callback_check_log');
        
        
            if($this->form_validation->run())
            {
                
                $user = $this->input->post('user');
                $pass = $this->input->post('pass');
                $pass = md5($pass);
                $where = array(
                    'user' => $user,
                    'pass' => $pass
                );
                
                //lấy thông tin thành viên
                $info = $this->Login_Model->get_info_rule($where);
                //lưu thông tin thành viên vào session
                
                 $this->session->set_userdata('admin_login', $info);
                
                
               
                                                                                         
                $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
                redirect('Home_admin/Main');
            }
        }
        
        $this->load->view('admin/Login');
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
    
        if(!$this->Login_Model->check_login($user,$pass,$where))
        {
            $this->form_validation->set_message(__FUNCTION__, "Đăng nhập không thành công !!!");
            return false;
        }
    
        return true;
    
    }
    
    private function user_is_login()
    {
        $user_data = $this->session->userdata('admin_login');
        if(!$user_data)
        {
            return false;
        }
        return true;
    }
    
    public function logout()
    {
        if($this->user_is_login())
        {
            $this->session->sess_destroy();
        }
        $this->session->set_flashdata('flash_message','Đăng xuất thành công');
        redirect('Login/index');
    }
}
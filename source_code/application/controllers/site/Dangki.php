<?php
require_once APPPATH . 'core/My_Controller.php';
class Dangki extends My_Controller
{
    public function Dang_ki()
    {
       if($this->input->post())
        {
            $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');           
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|xss_clean');
            $this->form_validation->set_rules('user','Tài khoản','required|xss_clean|callback_check_user');
            $this->form_validation->set_rules('pass','Mật khẩu','required|min_length[6]|xss_clean');
            $this->form_validation->set_rules('repass','Xác nhận mật khẩu','required|matches[pass]|min_length[6]|xss_clean');
            
            
           if($this->form_validation->run())
           {
               $ngaysinh = $this->input->post('ngaysinh');
               $thangsinh = $this->input->post('thangsinh');
               $namsinh = $this->input->post('namsinh');
               
               $datestring = "$ngaysinh/$thangsinh/$namsinh";
               
               $this->data = array(
                   'hoten' =>$this->input->post('hoten'),
                   'ngaysinh' =>$datestring,
                   'gioitinh' =>$this->input->post('gioitinh'),
                   'email' =>$this->input->post('email'),
                   'sdt' =>$this->input->post('sdt'),
                   'cmnd' =>$this->input->post('cmnd'),
                   'user' =>$this->input->post('user'),
                   'pass' =>md5($this->input->post('pass'))
               );
               
               if($this->Khachhang_Model->create($this->data))
               {
                   $this->session->set_flashdata('flash_dangki' ,'Đăng kí thành viên thành công !!!');          
               }
                   
               
                   
           }
        }
        
        $this->data['title'] = "Đăng kí";
        $this->data['left'] = "site/Dangki";
        $this->load->view($this->site, $this->data);
    }
    
    public function check_user()
    {
        $user = $this->input->post('user');
        $where = array();
        $where['user'] = $user;
    
        if($this->Khachhang_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản này đã có người sử dụng.');
            return FALSE;
        }
        return TRUE;
    
    }
    
}
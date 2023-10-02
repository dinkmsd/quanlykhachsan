<?php
require_once APPPATH . 'core/My_Controller.php';
class Quantri extends My_Controller
{
    public function Taikhoannhanvien()
    {
         if($this->session->userdata('admin_login')->admin_group_id == 1)
         {
            $id = $this->uri->rsegment(3);
            $nhanvien = $this->Login_Model->get_info($id);
            $this->data['nhanvien'] = $nhanvien;
            
            if($this->input->post())
            {
            
               
                $this->form_validation->set_rules('user','Tài khoản','required|xss_clean');
                $this->form_validation->set_rules('pass','Mật khẩu','required|min_length[6]|xss_clean');
                $this->form_validation->set_rules('repass','Xác nhận mật khẩu','required|matches[pass]|min_length[6]|xss_clean');
            
            
                if($this->form_validation->run())
                {
                    $this->data = array(
                         'admin_group_id' =>$this->input->post('admin_group_id'),
                        'user' =>$this->input->post('user'),
                        'pass' =>md5($this->input->post('pass'))
                    );
                     
            
                    if($this->Login_Model->update($id,$this->data))
                    {
                        $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                        redirect('admin/Quantri/Taikhoannhanvien');
                    }
                }
            }
            
            
            $this->data['title'] = "Tài khoản nhân viên";
            $this->data['contents'] = 'admin/Taikhoannhanvien';
            $this->load->view($this->site_admin, $this->data);
         }
         else {
             redirect('admin/Quanlyphong/Danhsachphong');
         }
    }
    
    public function Nhomtaikhoan()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $this->data['title'] = "Nhóm tài khoản nhân viên";
            $this->data['contents'] = 'admin/Nhomtaikhoan';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Xoataikhoannhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $id = $this->uri->rsegment(3);
            $this->db->where('id',$id);
            
            if(   $this->db->delete('admin'))
            {
                redirect('admin/Quantri/Taikhoannhanvien');
            }
            $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
            redirect('admin/Quantri/Taikhoannhanvien');
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Themtaikhoannhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            if($this->input->post())
            {
                $this->form_validation->set_rules('id_nhanvien','Mã nhân viên','required|xss_clean|callback_check_nhanvien');
                $this->form_validation->set_rules('user','Tài khoản','required|xss_clean|callback_check_user');
                $this->form_validation->set_rules('pass','Mật khẩu','required|min_length[6]|xss_clean');
                $this->form_validation->set_rules('repass','Xác nhận mật khẩu','required|matches[pass]|min_length[6]|xss_clean');
               
            
                if($this->form_validation->run())
                { 
                    $this->data = array(
                        'id_nhanvien' =>$this->input->post('id_nhanvien'),
                        'admin_group_id' =>$this->input->post('id_nhomtk'),
                        'user' =>$this->input->post('user'),
                        'pass' =>md5($this->input->post('pass'))
                    );
                     
                    if($this->Login_Model->create($this->data))
                    {
                        $this->session->set_flashdata('flash_dangki' ,'Thêm tài khoản nhân viên thành công !!!');
                        redirect('admin/Quantri/Taikhoannhanvien');
                    }
                     
                     
                     
                }
            }
            
            
            $this->data['title'] = "Thêm tài khoản nhân viên";
            $this->data['contents'] = 'admin/Themtaikhoannhanvien';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    
    public function check_nhanvien()
    {
        $nhanvien = $this->input->post('id_nhanvien');
        $where = array();
        $where['id_nhanvien'] = $nhanvien;
    
        if($this->Login_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
            $this->form_validation->set_message(__FUNCTION__, 'Nhân viên này đã có tài khoản.');
            return FALSE;
        }
        return TRUE;
    
    }
    
    public function check_user()
    {
        $user = $this->input->post('user');
        $where = array();
        $where['user'] = $user;
    
        if($this->Login_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản này đã có nhân viên sử dụng.');
            return FALSE;
        }
        return TRUE;
    
    }
}
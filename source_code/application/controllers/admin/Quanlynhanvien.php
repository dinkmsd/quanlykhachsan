<?php
require_once APPPATH . 'core/My_Controller.php';
class Quanlynhanvien extends My_Controller
{
    public function Danhsachnhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $this->data['title'] = "Quản lý nhân viên";
            $this->data['contents'] = 'admin/Quanlynhanvien';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Themnhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            if($this->input->post())
            {
                $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
                 $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
                $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|xss_clean');
                $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
                $this->form_validation->set_rules('diachi','Địa chỉ','required|xss_clean');
    
    
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
                        'sdt' =>$this->input->post('sdt'),
                        'cmnd' =>$this->input->post('cmnd'),
                        'email' =>$this->input->post('email'),
                        'diachi' =>$this->input->post('diachi')
                         
                    );
                     
                    if($this->Nhanvien_Model->create($this->data))
                    {
                        $this->session->set_flashdata('flash_dangki' ,'Thêm nhân viên thành công !!!');
                        redirect('admin/Quanlynhanvien/Danhsachnhanvien');
                    }
                     
                     
                     
                }
            }
    
            $this->data['title'] = "Thêm nhân viên";
            $this->data['contents'] = 'admin/Themnhanvien';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
           redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Suanhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $id = $this->uri->rsegment(3);
            $nhanvien = $this->Nhanvien_Model->get_info_nhanvien($id);
            $this->data['nhanvien'] = $nhanvien;
    
            if($this->input->post())
            {
                $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
                $this->form_validation->set_rules('ngaysinh','Ngày sinh','required|xss_clean');
                $this->form_validation->set_rules('gioitinh','Giới tính','required|min_length[2]|max_length[3]|xss_clean');
                $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
                $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
                $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|max_length[15]|xss_clean');
                $this->form_validation->set_rules('diachi','Địa chỉ','required|xss_clean');
                 
    
    
                if($this->form_validation->run())
                {
                     
                     
                    $this->data = array(
                        'hoten' =>$this->input->post('hoten'),
                        'ngaysinh' =>$this->input->post('ngaysinh'),
                        'gioitinh' =>$this->input->post('gioitinh'),
                        'email' =>$this->input->post('email'),
                        'sdt' =>$this->input->post('sdt'),
                        'cmnd' =>$this->input->post('cmnd'),
                        'diachi' =>$this->input->post('diachi')
                    );
    
    
                    if($this->Nhanvien_Model->update_nhanvien($id,$this->data))
                    {
                        $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                        redirect('admin/Quanlynhanvien/Suanhanvien/'.$id);
                    }
    
                }
            }
    
            $this->data['title'] = "Sửa nhân viên";
            $this->data['contents'] = 'admin/Suanhanvien';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
           redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Xoanhanvien()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $id = $this->uri->rsegment(3);
            $this->db->where('id_nhanvien',$id);
           
            if( $this->db->delete('nhanvien'))
            {
                redirect('admin/Quanlynhanvien/Danhsachnhanvien');
            }
            $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
            redirect('admin/Quanlynhanvien/Danhsachnhanvien');
        }
        else {
           redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
}
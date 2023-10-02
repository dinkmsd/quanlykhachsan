<?php
require_once APPPATH . 'core/My_Controller.php';
class Quanlykhachhang extends My_Controller
{
    public function Danhsachkhachhang()
    {
        $this->data['title'] = "Quản lý khách hàng";
        $this->data['contents'] = "admin/Quanlykhachhang";
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Suakhachhang()
    {
        $id = $this->uri->rsegment(3);
        $khachhang = $this->Khachhang_Model->get_info($id);
        $this->data['khachhang'] = $khachhang;
    
        if($this->input->post())
        {
            $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
            $this->form_validation->set_rules('ngaysinh','Ngày sinh','required|xss_clean');
            $this->form_validation->set_rules('gioitinh','Giới tính','required|min_length[2]|max_length[3]|xss_clean');
            $this->form_validation->set_rules('email','Email','valid_email|xss_clean');
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('pass','Mật khẩu','min_length[6]|xss_clean');
            $this->form_validation->set_rules('repass','Xác nhận mật khẩu','matches[pass]|min_length[6]|xss_clean');
            
    
    
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'hoten' =>$this->input->post('hoten'),
                    'ngaysinh' =>$this->input->post('ngaysinh'),
                    'gioitinh' =>$this->input->post('gioitinh'),
                    'email' =>$this->input->post('email'),
                    'sdt' =>$this->input->post('sdt'),
                    'cmnd' =>$this->input->post('cmnd'),
                    'pass' =>md5($this->input->post('pass'))
                );
    
                if($this->Khachhang_Model->update($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Quanlykhachhang/Suakhachhang/'.$id);
                }
                 
            }
        }
    
        $this->data['title'] = "Sửa khách hàng";
        $this->data['contents'] = 'admin/Suakhachhang';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function del_khachhang($id)
    {   
        $this->db->where('id',$id);
       
        if($this->db->delete('khachhang'))
        {
            redirect('admin/Quanlykhachhang/Danhsachkhachhang');
        }
       $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
       redirect('admin/Quanlykhachhang/Danhsachkhachhang');
        
    }
    
    public function Themkhachhang()
    {
        if($this->input->post())
        {
            $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|xss_clean');
            $this->form_validation->set_rules('cmnd','Số chứng minh nhân dân','required|numeric|min_length[9]|xss_clean');
    
    
    
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
                     
                );
                 
                if($this->Khachhang_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_dangki' ,'Thêm khách hàng thành công !!!');
                    redirect('admin/Quanlykhachhang/Danhsachkhachhang');
                }
                 
                 
                 
            }
        }
    
        $this->data['title'] = "Thêm khách hàng";
        $this->data['contents'] = 'admin/Themkhachhang';
        $this->load->view($this->site_admin, $this->data);
    }
}
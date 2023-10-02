<?php
require_once APPPATH . 'core/My_Controller.php';

class Bangluong extends My_Controller
{
    public function Bang_luong()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $row = $this->Bangluong_Model->daxu();
            $this->data['r'] = $row;
            
            $roww = $this->Bangluong_Model->chuaxu();
            $this->data['rr'] = $roww;
            
            $id = $this->uri->rsegment(3);
            $bangluong = $this->Bangluong_Model->get_info_bangluong($id);
            $this->data['bangluong'] = $bangluong;
            
            
            if($this->input->post())
            {
                $this->form_validation->set_rules('id_bangluong','Số bảng lương','required|xss_clean');
                $this->form_validation->set_rules('ngaylamviec','Ngày làm việc','required|xss_clean');
                $this->form_validation->set_rules('ngaynhanluong','Ngày nhận lương','required|xss_clean');           
                $this->form_validation->set_rules('luongcung','Lương cứng','required|numeric|xss_clean');
                $this->form_validation->set_rules('sotiennhanduoc','Số tiền nhận được','required|numeric|xss_clean');
                
            
                if($this->form_validation->run())
                {    
                    $this->data = array(
                        'ngaylamviec' =>$this->input->post('ngaylamviec'),
                        'ngaynhanluong' =>$this->input->post('ngaynhanluong'),
                        'songaylam' =>$this->input->post('songaylam'),
                        'songaynghi' =>$this->input->post('songaynghi'),
                        'luongcung' =>$this->input->post('luongcung'),
                        'sotiennhanduoc' =>$this->input->post('sotiennhanduoc'),
                        'ghichu' =>$this->input->post('ghichu'),
                        'tinhtrang' =>$this->input->post('tinhtrang')
                    );
                     
            
                    if($this->Bangluong_Model->update_bangluong($id,$this->data))
                    {
                        $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                        redirect('admin/Bangluong/Bang_luong');
                    }
                }
            }
            
            
            $this->data['title'] = "Bảng lương nhân viên";
            $this->data['contents'] = 'admin/Bangluong';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Xoabangluong()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            $id = $this->uri->rsegment(3);
            $this->db->where('id_bangluong',$id);
            $this->db->delete('bangluong');
            redirect('admin/Bangluong/Bang_luong');
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
    
    public function Tinhluong()
    {
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {
            if($this->input->post())
            {
                 
                $this->form_validation->set_rules('luongcung','Lương cứng','required|numeric|xss_clean');
                 
    
    
                if($this->form_validation->run())
                {
                    $ngayden = $this->input->post('ngayden');
                    $thangden = $this->input->post('thangden');
                    $namden = $this->input->post('namden');
    
    
                     
                    $datestring = "$ngayden-$thangden-$namden";
                     
                    $this->data = array(
                        'id_nhanvien'=>$this->input->post('id_nhanvien'),
                        'ngaylamviec' =>$datestring,
                        'luongcung' =>number_format($this->input->post('luongcung')),
                        'ghichu' =>$this->input->post('ghichu'),
                        'tinhtrang' =>'Chưa xử lý'
            
                    );
                     
                    if($this->Bangluong_Model->create($this->data))
                    {
                        $this->session->set_flashdata('flash_tinhluong' ,'Thêm bảng lương thành công !!!');
                          redirect('admin/Bangluong/Bang_luong');
                    }
                     
                     
                     
                }
            }
    
            $this->data['title'] = "Tính lương cho nhân viên";
            $this->data['contents'] = 'admin/Tinhluong';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
}
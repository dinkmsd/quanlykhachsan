<?php
require_once APPPATH . 'core/My_Controller.php';
class Giohang extends My_Controller
{
    public function Gio_hang()
    {
         if($this->session->userdata('login') == null)
        {
            $this->session->set_flashdata('flash_giohang', 'Đăng nhập để xem thông tin đặt phòng của bạn !!!');
            redirect('site/Dangnhap/Dang_nhap');
        }
        
        $row = $this->Datphong_Model->loaddatphong($this->session->userdata('login')->id);
        $this->data['r'] = $row;
                
        $this->data['title'] = "Thông tin đặt phòng";
        $this->data['left'] = "site/Giohang";
        $this->load->view($this->site, $this->data);
    }
    
    public function del_giohang()
    {
        $id = $this->uri->rsegment(3);
        $this->db->where('iddatphong',$id);
        $this->db->delete('datphong');
        redirect('site/Giohang/Gio_hang');
    
    }
}
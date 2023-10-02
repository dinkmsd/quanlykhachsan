<?php
require_once APPPATH . 'core/My_Controller.php';
class Main extends My_Controller
{
    public function Ma_in()
    {
     $row = $this->Datphong_Model->daxu();
        $this->data['r'] = $row;
        
        $roww = $this->Datphong_Model->chuaxu();
        $this->data['rr'] = $roww;
        
       
        if($this->session->userdata('admin_login')->admin_group_id == 1)
        {       
            $this->data['title'] = "Trang chính";
            $this->data['contents'] = 'admin/Main';
            $this->load->view($this->site_admin, $this->data);
        }
        else {
            redirect('admin/Quanlyphong/Danhsachphong');
        }
    }
}
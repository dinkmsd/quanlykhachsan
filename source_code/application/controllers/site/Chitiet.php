<?php
require_once APPPATH . 'core/My_Controller.php';
class Chitiet extends My_Controller
{
    public function Chi_tiet()
    {
        $id = $this->uri->rsegment(3);
        $phong = $this->Buongphong_Model->get_info($id);
        if(!$phong) redirect();
        $this->data['phong'] = $phong;
        
        $this->data['title'] = "Chi tiết ";
        $this->data['left'] = "site/Chitiet";
        $this->load->view($this->site, $this->data);
    }
}
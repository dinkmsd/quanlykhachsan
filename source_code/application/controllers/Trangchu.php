<?php
require_once APPPATH . 'core/My_Controller.php';
class Trangchu extends My_Controller
{
    public function Trang_chu()
    {
        $this->data['title'] = "Trang chủ";
        $this->data['left'] = 'site/Trangchu';
        $this->load->view($this->site, $this->data); 
    }
}
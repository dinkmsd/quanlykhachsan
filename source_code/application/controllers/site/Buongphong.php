<?php
require_once APPPATH . 'core/My_Controller.php';
class Buongphong extends My_Controller
{
    public function Buong_phong()
    {
        $this->data['title'] = "Buồng phòng";
        $this->data['left'] = "site/Buongphong";
        $this->load->view($this->site,$this->data);
    }
}
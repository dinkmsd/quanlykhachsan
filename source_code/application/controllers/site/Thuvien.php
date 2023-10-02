<?php
require_once APPPATH . 'core/My_Controller.php';
class Thuvien extends My_Controller
{
    public function Thu_vien()
    {
          $this->data['title'] = "Thư viện";
        $this->data['left'] = "site/Thuvien";
        $this->load->view($this->site, $this->data);
    }
}
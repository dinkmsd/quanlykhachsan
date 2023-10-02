<?php
require_once APPPATH . 'core/My_Controller.php';
class Lienhe extends My_Controller
{
    public function Lien_he()
    {
        if($this->input->post())
        {
            $this->form_validation->set_rules('hoten','Họ tên','required|xss_clean');
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[15]|xss_clean');
            $this->form_validation->set_rules('tieude','Tiêu đề','required|xss_clean');
            $this->form_validation->set_rules('nd','Nội dung','required|xss_clean');
            
        
        
            if($this->form_validation->run())
            {
                     $this->data = array(
                    'hoten' =>$this->input->post('hoten'),
                    'email' =>$this->input->post('email'),
                    'sdt' =>$this->input->post('sdt'),
                    'tieude' =>$this->input->post('tieude'),
                    'noidung' =>$this->input->post('nd'),
                    'tinhtrang' =>'Chưa xử lý',
                     'date' =>  date('d/m/Y H:i:s')
                   
                );
                 
                if($this->Phanhoi_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_phanhoi' ,'Gởi liên hệ thành công !!!');
                    
                }       
            }
        }
        
        
        
        $this->data['title'] = "Liên hệ";
        $this->data['left'] = 'site/Lienhe';
        $this->load->view($this->site, $this->data);
    }
}
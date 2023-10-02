<?php
require_once APPPATH . 'core/My_Controller.php';
class Hotrovalienhe extends My_Controller
{
    public function Hotro()
    {
        $id = $this->uri->rsegment(3);
        $hotro = $this->Hotro_Model->get_info($id);
        $this->data['hotro'] = $hotro;
        
        
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('id','Mã hỗ trợ','required|xss_clean');
            $this->form_validation->set_rules('sdt','Số điện thoại','required|numeric|min_length[9]|max_length[13]|xss_clean');
        
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'facebook' =>$this->input->post('facebook'),
                    'sdt' =>$this->input->post('sdt')
                );
                 
        
                if($this->Hotro_Model->update($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Hotrovalienhe/Hotro');
                }
            }
        }
        
        
        $this->data['title'] = "Hỗ trợ trực tuyến";
        $this->data['contents'] = 'admin/Hotro';
        $this->load->view($this->site_admin, $this->data);
    }
    
    
    public function Lienhe()
    {
        $id = $this->uri->rsegment(3);
        $lienhe = $this->Lienhe_Model->get_info($id);
        $this->data['lienhe'] = $lienhe;
    
    
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('id','Mã liên hệ','required|xss_clean');
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
    
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'diachi' =>$this->input->post('diachi'),
                    'hotline' =>$this->input->post('hotline'),
                    'email' =>$this->input->post('email')
                );
                 
    
                if($this->Lienhe_Model->update($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Hotrovalienhe/Lienhe');
                }
            }
        }
    
    
        $this->data['title'] = "Liên hệ";
        $this->data['contents'] = 'admin/Lienhe';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Phan_hoi()
    {
        	  
        $row = $this->Phanhoi_Model->daxu();
        $this->data['r'] = $row;
        
        $roww = $this->Phanhoi_Model->chuaxu();
        $this->data['rr'] = $roww;
        
        $id = $this->uri->rsegment(3);
        $noidung = $this->Phanhoi_Model->get_info($id);
        $this->data['noidung'] = $noidung;
        
        $this->data['title'] = "Phản hồi của khách hàng";
        $this->data['contents'] = 'admin/Phanhoi';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function del_phanhoi($id)
    {
        $this->db->where('id',$id);
         
        if($this->db->delete('phanhoi'))
        {
            redirect('admin/Hotrovalienhe/Phan_hoi');
        }
        $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
        redirect('admin/Hotrovalienhe/Phan_hoi');
    
    }
}
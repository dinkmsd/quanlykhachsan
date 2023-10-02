<?php
require_once APPPATH . 'core/My_Controller.php';
class Quanlyphong extends My_Controller
{
    public function Danhsachphong()
    {
        $id1 = $this->Quanlyphong_Model->gettable_id('1');
        $this->data['id1'] = $id1;
        
        $id2 = $this->Quanlyphong_Model->gettable_id('2');
        $this->data['id2'] = $id2;
        
        $id3 = $this->Quanlyphong_Model->gettable_id('3');
        $this->data['id3'] = $id3;
        
        $id4 = $this->Quanlyphong_Model->gettable_id('4');
        $this->data['id4'] = $id4;
        
        
        $this->data['title'] = "Quản lý phòng";
        $this->data['contents'] = 'admin/Quanlyphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Chitietphong($id=null, $year = null,$month = null)
    {
        $id = $this->uri->rsegment(3);
        $phong = $this->Quanlyphong_Model->get_info_phong($id);
        $this->data['phong'] = $phong;
    
    
        if(!$year){
            $year = date('Y');
        }
        if(!$month){
            $month = date('m');
        }
    
        if($day = $this->input->post('day')){
            $this->Quanlyphong_Model->add_calendar_data(
                $id,
                "$year-$month-$day",
                $this->input->post('data')
            );
        }
        $this->data['calendar'] = $this->Quanlyphong_Model->generate($year,$month);
    
        $this->data['title'] = "Chi tiết phòng";
        $this->data['contents'] = 'admin/Chitietphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Loaiphong()
    {
        $id = $this->uri->rsegment(3);
        $phong = $this->Loaiphong_Model->get_info($id);
        $this->data['phong'] = $phong;
    
    
    
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('giaphong','Giá phòng','required|numeric|xss_clean');
            $this->form_validation->set_rules('thoigian','Thời gian','required|xss_clean');
            $this->form_validation->set_rules('succhua','Sức chứa','required|numeric|xss_clean');
            $this->form_validation->set_rules('mota','Mô tả','required|xss_clean');
            $this->form_validation->set_rules('chitiet','Chi tiết','required|xss_clean');
             
    
    
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
    
                    'giaphong' =>number_format($this->input->post('giaphong')),
                    'thoigian' =>$this->input->post('thoigian'),
                    'succhua' =>$this->input->post('succhua'),
                    'mota' =>$this->input->post('mota'),
                    'chitiet' =>$this->input->post('chitiet'),
                    'gp' =>$this->input->post('giaphong')
                );
    
                 
    
                 
    
                if($this->Loaiphong_Model->update($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Quanlyphong/Loaiphong/'.$id);
                }
            }
        }
    
    
        $this->data['title'] = "Loại phòng";
        $this->data['contents'] = 'admin/Loaiphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
   
    
    public function Themphong()
    {
    
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('tinhtrang','Tình trạng','required|xss_clean');
    
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
    
                    'id_loaiphong' => $this->input->post('id_loaiphong'),
                    'tinhtrang' =>$this->input->post('tinhtrang')
                );
    
                 
    
                 
    
                if($this->Quanlyphong_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_dangki' ,'Thêm phòng thành công !!!');
                }
            }
        }
    
        $this->data['title'] = "Thêm phòng";
        $this->data['contents'] = 'admin/Themphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Suaphong()
    {
    
        $id = $this->uri->rsegment(3);
        $phong = $this->Quanlyphong_Model->get_info_phong($id);
        $this->data['phong'] = $phong;
    
    
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('tinhtrang','Tình trạng','required|xss_clean');
    
    
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
    
                    'tinhtrang' =>$this->input->post('tinhtrang')
                );
    
                 
    
                 
    
                if($this->Quanlyphong_Model->update_phongchothue($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Quanlyphong/Suaphong/'.$id);
                }
            }
        }
    
        $this->data['title'] = "Sửa phòng";
        $this->data['contents'] = 'admin/Suaphong';
        $this->load->view($this->site_admin, $this->data);
    
    }
}
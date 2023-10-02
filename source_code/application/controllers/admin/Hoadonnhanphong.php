<?php
require_once APPPATH . 'core/My_Controller.php';
class Hoadonnhanphong extends My_Controller
{   
    public function Hoadon_nhanphong()
    {
        $row = $this->Hoadon_nhanphong_Model->daxu();
        $this->data['r'] = $row;
    
        $roww = $this->Hoadon_nhanphong_Model->chuaxu();
        $this->data['rr'] = $roww;
    
       
    
        $this->data['title'] = "Danh sách hóa đơn nhận phòng";
        $this->data['contents'] = 'admin/Hoadon_nhanphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Them_Hoadon_nhanphong()
    {
        
        if($this->input->post())
        {
            
           
            
                $date = date('d-m-Y H:i:s');
        
           
                $this->data = array(
                    'idkhachhang' =>$this->input->post('idkhachhang'),
                    'idphong_chothue' =>$this->input->post('idphong_chothue'),
                    'ngaynhanphong' =>$date,
                    'songuoi' =>$this->input->post('songuoi'),
                    'tinhtrang' => "Chưa xử lý",
                    'id_nguoilap' => $this->session->userdata('admin_login')->id_nhanvien
                );
                
               
                 
                if($this->Hoadon_nhanphong_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_dangki' ,'Thêm hóa đơn nhận phòng thành công !!!');
                    redirect('admin/Hoadonnhanphong/Hoadon_nhanphong');
                }   
           
        }
        
        $this->data['title'] = "Thêm hóa đơn nhận phòng";
        $this->data['contents'] = 'admin/Them_Hoadon_nhanphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Xoa_Hoadon_nhanphong()
    {
        
        $id = $this->uri->rsegment(3);
        $this->db->where('idhoadon_nhanphong',$id);
        if($this->db->delete('hoadon_nhanphong'))
        {
            redirect('admin/Hoadonnhanphong/Hoadon_nhanphong');
        }
        $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
         redirect('admin/Hoadonnhanphong/Hoadon_nhanphong');
    }
}
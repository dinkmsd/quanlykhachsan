<?php
require_once APPPATH . 'core/My_Controller.php';
class Hoadontraphong extends My_Controller
{
 public function Them_Hoadon_traphong()
    {
        $id = $this->uri->rsegment(3);
        $nhanphong = $this->Hoadon_nhanphong_Model->get_info_hoadon_nhanphong($id);
        $this->data['nhanphong'] = $nhanphong;
        
        
        
        if($this->input->post())
        {
           
           
        
            $this->form_validation->set_rules('giaphong','Giá phòng','required|numeric|xss_clean');
            
            $ngaytraphong= date('d-m-Y H:i:s');
            $ngaynhanphong = $this->input->post('ngaynhanphong');
            $songayo = ceil((strtotime($ngaytraphong)-strtotime($ngaynhanphong))/24/3600); 
            $gia = $this->input->post('giaphong');
            if($this->form_validation->run())
            {
               
                
                    $this->data = array(
                        'idhoadon_nhanphong' =>$this->input->post('idhoadon_nhanphong'),
                        'idkhachhang' =>$this->input->post('idkhachhang'),
                        'idphong_chothue' =>$this->input->post('idphong_chothue'),
                        'ngaynhanphong' =>$ngaynhanphong,
                        'ngaytraphong' => $ngaytraphong,
                        'songayo' =>$songayo,
                        'giaphong' =>number_format($gia),
                        'tongtien' => number_format($songayo * $gia),
                        'id_nguoilap' => $this->session->userdata('admin_login')->id_nhanvien
                    );
                    
                    $this->data1 = array(
                        'tinhtrang' =>'Đã xử lý'
                    );
                     
                    if($this->Hoadon_traphong_Model->create($this->data)  and $this->Hoadon_nhanphong_Model->update_hoadon_nhanphong($this->input->post('idhoadon_nhanphong'),$this->data1))
                    {
                        $this->session->set_flashdata('flash_dangki' ,'Thêm hóa đơn trả phòng thành công !!!');
                        redirect('admin/Hoadontraphong/Hoadon_traphong');
                    }
               
            }
        }
        
        
        $this->data['title'] = "Thêm hóa đơn trả phòng";
        $this->data['contents'] = 'admin/Them_Hoadon_traphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function Hoadon_traphong()
    {
        $id = $this->uri->rsegment(3);
        $traphong = $this->Hoadon_traphong_Model->get_info_hoadon_traphong($id);
        $this->data['traphong'] = $traphong;
        
        
        if($this->input->post())
        {
             
            $this->form_validation->set_rules('idhoadon','Số hóa đơn trả phòng','required|xss_clean');
        
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'giaphong' =>number_format($this->input->post('giaphong')),
                    'tongtien' =>number_format($this->input->post('giaphong') * $this->input->post('songayo'))
                );
                 
        
                if($this->Hoadon_traphong_Model->update_hoadon_traphong($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Hoadontraphong/Hoadon_traphong');
                }
            }
        }
        
        $this->data['title'] = "Danh sách hóa đơn trả phòng";
        $this->data['contents'] = 'admin/Hoadon_traphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    
    public function Xoa_Hoadon_traphong()
    {
        $id = $this->uri->rsegment(3);
        $this->db->where('idhoadon_traphong',$id);
        $this->db->delete('hoadon_traphong');
        redirect('admin/Hoadontraphong/Hoadon_traphong');
    }
}
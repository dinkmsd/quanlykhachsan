<?php
require_once APPPATH . 'core/My_Controller.php';
class Quanlydatphong extends My_Controller
{
 public function Danhsachdatphong()
    {
        $row = $this->Datphong_Model->daxu();
        $this->data['r'] = $row;
        
        $roww = $this->Datphong_Model->chuaxu();
        $this->data['rr'] = $roww;
        
        $id = $this->uri->rsegment(3);
        $datphong = $this->Datphong_Model->get_info_datphong($id);
        $this->data['datphong'] = $datphong;
        
        if($this->input->post())
        {            
            $this->form_validation->set_rules('tinhtrang','Tình trạng','required|xss_clean');
            $this->form_validation->set_rules('iddatphong','Số đặt phòng','required|xss_clean');
            
            if($this->form_validation->run())
            {
                 
                 
                $this->data = array(
                    'tinhtrang' =>$this->input->post('tinhtrang')
                );
                 
        
                if($this->Datphong_Model->update_datphong($id,$this->data))
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Cập nhật thành công !!!');
                    redirect('admin/Quanlydatphong/Danhsachdatphong');
                }
            }
        }
        
        $this->data['title'] = "Danh sách đặt phòng";
        $this->data['contents'] = 'admin/Quanlydatphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function del_datphong()
    {
        $id = $this->uri->rsegment(3);
        $this->db->where('idkhachhang',$id);
        $this->db->delete('datphong');
        return $this->del_khachhang($id);
    }
     
    
    public function del_iddatphong()
    {
        $id = $this->uri->rsegment(3);
        $this->db->where('iddatphong',$id);
        $this->db->delete('datphong');
        redirect('admin/Quanlydatphong/Danhsachdatphong');
    }
    
    public function Themdatphong()
    {
        if($this->input->post())
        {
             
            $ngayden = $this->input->post('ngayden');
            $thangden = $this->input->post('thangden');
            $namden = $this->input->post('namden');
             
            $datesden = "$ngayden/$thangden/$namden";
            $datesdennguoc="$namden/$thangden/$ngayden";
    
            $ngaydi = $this->input->post('ngaydi');
            $thangdi = $this->input->post('thangdi');
            $namdi = $this->input->post('namdi');
             
            $datesdi = "$ngaydi/$thangdi/$namdi";
            $datesdinguoc = "$namdi/$thangdi/$ngaydi";
    
            /*$now = time();*/
    
            $daydi = date("d/m/Y", strtotime($datesdi)) ;
            $dayden = date("d/m/Y", strtotime($datesden));
             
            $days_between = (strtotime($datesdinguoc)- strtotime($datesdennguoc))/24/3600;
    
            $date = date('d/m/Y H:i:s');
    
            $now = date('d/m/Y');
    
            $where = $this->input->post('idphong');
            $field = 'gp';
            $info = $this->Buongphong_Model->get_info($where,$field);
    
    
            $tongtien = $days_between *  number_format($this->input->post('sophong')) * $info->gp ;
    
            if( (date("Y-m-d", strtotime($datesdinguoc)) > date("Y-m-d", strtotime($datesdennguoc))) and (date("Y-m-d", strtotime($datesdennguoc)) > date('Y-m-d')) )
            {
                $this->data = array(
                    'idkhachhang' => $this->input->post('idkhachhang'),
                    'idphong' => $this->input->post('idphong'),
                    'ngayden' =>$datesden,
                    'ngaydi' =>$datesdi,
                    'songuoi' =>$this->input->post('songuoi'),
                    'sophong' =>$this->input->post('sophong'),
                    'tongngay' => $days_between,
                    'ngaydatphong' => $date,
                    'tongtien' => number_format($tongtien),
                    'tinhtrang' => 'Chưa xử lý'
                );
    
    
                 
                if($this->Datphong_Model->create($this->data))
                {
                    $this->session->set_flashdata('flash_datphong' ,'Đặt phòng thành công !!!');
                    redirect('admin/Quanlydatphong/Danhsachdatphong');
                }
            }
    
            else
            {
                $this->session->set_flashdata('flash_dates' ,'Ngày đến phải lớn hơn hiện tại và bé hơn ngày đi !!!');
            }
    
        }
    
    
        $this->data['title'] = "Thêm đặt phòng";
        $this->data['contents'] = 'admin/Themdatphong';
        $this->load->view($this->site_admin, $this->data);
    }
    
    
}
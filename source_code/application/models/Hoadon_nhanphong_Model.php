<?php
require_once APPPATH . 'core/My_Model.php';
class Hoadon_nhanphong_Model extends My_Model
{ 
        public $table = "hoadon_nhanphong";
        
        
        public function daxu()
        {
            $query = $this->db->select('*')->from('hoadon_nhanphong')->like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
        public function chuaxu()
        {
            $query = $this->db->select('*')->from('hoadon_nhanphong')->not_like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
        
}
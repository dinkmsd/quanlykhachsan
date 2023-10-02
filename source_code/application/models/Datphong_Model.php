<?php
require_once APPPATH . 'core/My_Model.php';
class Datphong_Model extends My_Model
{ 
        public $table = "datphong";
        
        public function loaddatphong($id)
        {
            $this->db->select('*');
            $this->db->from('datphong');
            $this->db->join('khachhang', 'khachhang.id = datphong.idkhachhang');
            $this->db->join('phong', 'phong.id = datphong.idphong');
            $this->db->where('khachhang.id',$id);
            
            $thucthi = $this->db->get();
            
            return $thucthi->result();
        }
        
        public function daxu()
        {
            $query = $this->db->select('*')->from('datphong')->like('tinhtrang',"Đã xử lý",'both')->get();
            
            return $query->result();
        }
        
        public function chuaxu()
        {
            $query = $this->db->select('*')->from('datphong')->not_like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
       
}
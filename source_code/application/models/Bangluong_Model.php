<?php

require_once APPPATH . 'core/My_Model.php';
class Bangluong_Model extends My_Model
{ 
        public $table = "bangluong";
        
        
        public function daxu()
        {
            $query = $this->db->select('*')->from('bangluong')->like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
        public function chuaxu()
        {
            $query = $this->db->select('*')->from('bangluong')->not_like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
        
}
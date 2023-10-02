<?php
require_once APPPATH . 'core/My_Model.php';
class Phanhoi_Model extends My_Model
{ 
        public $table = "phanhoi";
        
        
        public function daxu()
        {
            $query = $this->db->select('*')->from('phanhoi')->like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
        public function chuaxu()
        {
            $query = $this->db->select('*')->from('phanhoi')->not_like('tinhtrang',"Đã xử lý",'both')->get();
        
            return $query->result();
        }
        
}
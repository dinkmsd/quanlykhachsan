<?php
require_once APPPATH . 'core/My_Model.php';
class Khachhang_Model extends My_Model
{ 
        public $table = "khachhang";
        
        function role_exists($user,$pass)
        {
            $this->db->where('user',$user);
            $this->db->where('pass',$pass);
            $query = $this->db->get($this->table);
            if ($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }
        
        function check_tt($user,$email)
        {
            $this->db->where('user',$user);
            $this->db->where('email',$email);
            $query = $this->db->get($this->table);
            if ($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }
}
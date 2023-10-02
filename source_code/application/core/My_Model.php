<?php
class My_Model extends CI_Model
{
    public $table;
    
   
    // Key chinh cua table
    var $key = 'id';
    
    // Order mac dinh (VD: $order = array('id', 'desc))
    var $order = '';
    
    // Cac field select mac dinh khi get_list (VD: $select = 'id, name')
    var $select = '';
    
    
    
    
    public function __construct()
    {
        parent::__construct();
        
        
    }
    
    
    
    public function create($data)
    {
        if($this->db->insert($this->table, $data))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    public function check_exists($where = array())
    {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function check_login($user, $pass, $where = array())
    {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    
    
    public function get_info($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['id'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_nhanvien($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['id_nhanvien'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_phong($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['idphong_chothue'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_bangluong($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['id_bangluong'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_datphong($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['iddatphong'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_hoadon_nhanphong($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['idhoadon_nhanphong'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_hoadon_traphong($id, $field= '')
    {
        if(!$id)
        {
            return false;
        }
        $where = array();
        $where['idhoadon_traphong'] = $id;
        return $this->get_info_rule($where,$field);
    }
    
    public function get_info_rule($where=array(), $field= '')
    {
        if($field)
        {
            $this->db->select($field);
        }
        
        $this->db->where($where);
        $result = $this->db->get($this->table);
        if($result->num_rows()>0 )
        {
            return $result->row();
        }
        else {
            return false;
        }
    }
    
    
    function update($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_bangluong($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id_bangluong'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_nhanvien($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id_nhanvien'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_hoadon_nhanphong($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['idhoadon_nhanphong'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_hoadon_traphong($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['idhoadon_traphong'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_phongchothue($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['idphong_chothue'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
    
    function update_datphong($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['iddatphong'] = $id;//điều kiện khóa chính bằng $id truyền vào
        return $this->update_rule($where, $data);
    }
   
    
    
    function update_rule($where, $data)
    {
        if (!$where)
        {
            return FALSE;
        }
        $this->db->where($where);//thêm điều kiện
        if($this->db->update($this->table, $data))//cập nhật dữ liệu
        {
            return TRUE;
        }
        return FALSE;
    }
    
    public function gettable($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }
    
    public function gettable_id($id)
    {
        $this->db->select('*');
        $this->db->from('phongchothue');
        $this->db->where("id_loaiphong", $id);
 
        $thucthi = $this->db->get();       
        return $thucthi->result();
    }
    
    
    /**
     * Xoa row tu id
     * $id : gia tri cua khoa chinh
     */
    function delete($id)
    {
        if (!$id)
        {
            return FALSE;
        }
        //neu la so
        if(is_numeric($id))
        {
            $where = array($this->key => $id);
        }else
        {
            //$id = 1,2,3...
            $where = $this->key . " IN (".$id.") ";
        }
        $this->del_rule($where);
    
        return TRUE;
    }
    
    /**
     * Xoa row tu dieu kien
     * $where : mang dieu kien de xoa
     */
    function del_rule($where)
    {
        if (!$where)
        {
            return FALSE;
        }
    
        $this->db->where($where);
        $this->db->delete($this->table);
    
        return TRUE;
    }
    
    
    /**
     * Lay danh sach
     * $input : mang cac du lieu dau vao
     */
    function get_list($input = array())
    {
        //xu ly ca du lieu dau vao
        $this->get_list_set_input($input);
    
        //thuc hien truy van du lieu
        $query = $this->db->get($this->table);
        //echo $this->db->last_query();
        return $query->result();
    }
    
    /**
     * Gan cac thuoc tinh trong input khi lay danh sach
     * $input : mang du lieu dau vao
     */
    
    protected function get_list_set_input($input = array())
    {
    
        // ThÃªm Ä‘iá»�u kiá»‡n cho cÃ¢u truy váº¥n truyá»�n qua biáº¿n $input['where']
        //(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
        if ((isset($input['where'])) && $input['where'])
        {
            $this->db->where($input['where']);
        }
    
        //tim kiem like
        // $input['like'] = array('name' , 'abc');
        if ((isset($input['like'])) && $input['like'])
        {
            $this->db->like($input['like'][0], $input['like'][1]);
        }
    
        // ThÃªm sáº¯p xáº¿p dá»¯ liá»‡u thÃ´ng qua biáº¿n $input['order']
        //(vÃ­ dá»¥ $input['order'] = array('id','DESC'))
        if (isset($input['order'][0]) && isset($input['order'][1]))
        {
            $this->db->order_by($input['order'][0], $input['order'][1]);
        }
        else
        {
            //máº·c Ä‘á»‹nh sáº½ sáº¯p xáº¿p theo id giáº£m dáº§n
            $order = ($this->order == '') ? array($this->table.'.'.$this->key, 'desc') : $this->order;
            $this->db->order_by($order[0], $order[1]);
        }
    
        // ThÃªm Ä‘iá»�u kiá»‡n limit cho cÃ¢u truy váº¥n thÃ´ng qua biáº¿n $input['limit']
        //(vÃ­ dá»¥ $input['limit'] = array('10' ,'0'))
        if (isset($input['limit'][0]) && isset($input['limit'][1]))
        {
            $this->db->limit($input['limit'][0], $input['limit'][1]);
        }
    
    }
    
    function get_total($input = array())
    {
        $this->get_list_set_input($input);
    
        $query = $this->db->get($this->table);
    
        return $query->num_rows();
    }
}
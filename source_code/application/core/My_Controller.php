 <?php
 
 //require_once APPPATH . 'controllers/my_controller.php';
class My_Controller extends CI_Controller
{
    public $data = array();
    public $site;
    public $site_admin;
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->site = 'site/Home';
        $this->site_admin = 'admin/Home_admin';
        $this->load->model('Khachhang_Model');
        $this->load->model('Buongphong_Model');
        $this->load->model('Datphong_Model');
        $this->load->model('Login_Model');
        $this->load->model('Quanlyphong_Model');
        $this->load->model('Loaiphong_Model');
        $this->load->model('Hoadon_nhanphong_Model');
        $this->load->model('Nhanvien_Model');
        $this->load->model('Bangluong_Model');
        $this->load->model('Nhomtaikhoan_Model');
        $this->load->model('Hoadon_traphong_Model');
        $this->load->model('Hotro_Model');
        $this->load->model('Lienhe_Model');
        $this->load->model('Calendar_Model');
        $this->load->model('Phanhoi_Model');
        $this->load->model('Guiemail_Model');
        
        
        
        
        $controller = $this->uri->rsegment(1);
        if($controller == 'Main' || $controller == 'Quanlyphong' || $controller == 'Hoadonnhanphong' || $controller == 'Hoadontraphong' || $controller == 'Hotrovalienhe' || $controller == 'Quanlydatphong' || $controller == 'Quanlykhachhang' || $controller == 'Quanlynhanvien' || $controller == 'Quantri' || $controller == 'Bangluong')
        {
           
           $login_admin = $this->session->userdata('admin_login');
           
           
           if($login_admin != null)
           {
               return true;
           }
           
           
           
           else return redirect('Trangchu/Trang_chu');
        }                     
    }
    
    /*
     * Kiem tra trang thai dang nhap cua admin
     */
    
}
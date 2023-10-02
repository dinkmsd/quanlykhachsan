<?php
require_once APPPATH . 'core/My_Controller.php';
class Guiemail extends My_Controller
{
    public function Gui_email()
    {     
        $id = $this->uri->rsegment(3);
        $phanhoi = $this->Phanhoi_Model->get_info($id);
        $this->data['phanhoi'] = $phanhoi;
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('tieude','Tiêu đề','required|xss_clean');
            $this->form_validation->set_rules('noidung','Nội dung','required|xss_clean');
            $this->form_validation->set_rules('pass','Mật khẩu Email gởi','required|xss_clean');
            $this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
            
            $sender_email = $this->input->post('email_goi');
            $user_password = $this->input->post('pass');
            $receiver_email = $this->input->post('email');
            $username = "Nam Định Luxury Hotel";
            $subject = $this->input->post('tieude');
            $message = $this->input->post('noidung');
           
            if($this->form_validation->run())
            {
                $this->data = array(
                    'id_phanhoi' =>$this->input->post('id_phanhoi'),
                    'email' =>$this->input->post('email'),
                    'tieude' =>$this->input->post('tieude'),
                    'noidung' =>$this->input->post('noidung'),
                    'date' =>date('d/m/Y H:i:s'),
                    'id_nhanvien' =>$this->session->userdata('admin_login')->id_nhanvien
                );
                 
                $this->data1 = array(
                    'tinhtrang' =>'Đã xử lý'
                   
                );
              
                
                $config['useragent'] = 'CodeIgniter';
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                //var_dump($sender_email);exit;
                $config['smtp_user'] = $sender_email;//email cua ban
				$config['smtp_pass'] = $user_password;
                $config['smtp_port'] = 465;
                $config['smtp_timeout'] = 5;
                $config['wordwrap'] = TRUE;
                $config['wrapchars'] = 76;
                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['validate'] = FALSE;
                $config['priority'] = 3;
                $config['crlf'] = "\r\n";
                $config['newline'] = "\r\n";
                $config['bcc_batch_mode'] = FALSE;
                $config['bcc_batch_size'] = 200;
                // Load email library and passing configured values to email library
                $this->load->library('email', $config);
                
                 
                // Sender email address
				$this->email->from($sender_email, $username);
				// Receiver email address
				$this->email->to($receiver_email);
				// Subject of email
				$this->email->subject($subject);
				// Message in email
				$this->email->message($message);
                 
                //dinh kem file
                 
                //thuc hien gui
                if (  $this->email->send() and  $this->Guiemail_Model->create($this->data)  and $this->Phanhoi_Model->update($this->input->post('id_phanhoi'),$this->data1) )
                {
                    $this->session->set_flashdata('flash_capnhat' ,'Gửi email thành công !!!');
                    redirect('admin/Guiemail/Gui_email/'.$id);
                  
                }else{
                    
                    $this->session->set_flashdata('flash_b' ,'Gửi Email thất bại !!!');
                    redirect('admin/Guiemail/Gui_email/'.$id);
                }
                
                
                
                 
               
            }
        }
        
        
            $this->data['title'] = "Gửi email";
            $this->data['contents'] = 'admin/Gui_email';
            $this->load->view($this->site_admin, $this->data);
       
    }
    
    public function Danhsachemail_goi()
    {
        $id = $this->uri->rsegment(3);
        $email_goi = $this->Guiemail_Model->get_info($id);
        $this->data['email_goi'] = $email_goi;
        
        $this->data['title'] = "Danh sách email đã phản hồi";
        $this->data['contents'] = 'admin/Danhsachemail_goi';
        $this->load->view($this->site_admin, $this->data);
    }
    
    public function del_guiemail($id)
    {
        $this->db->where('id',$id);
         
        if($this->db->delete('guiemail'))
        {
            redirect('admin/Guiemail/Danhsachemail_goi');
        }
        $this->session->set_flashdata('flash_xoa' ,'Xóa thất bại !!!');
       redirect('admin/Guiemail/Danhsachemail_goi');
    
    }
}
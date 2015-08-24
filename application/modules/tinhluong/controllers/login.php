<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          $this->load->model('login_model');
     }

     public function index()
     {
          //lay gia tri input
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations cho form
          $this->form_validation->set_rules("txt_username", "Username", "required");
          $this->form_validation->set_rules("txt_password", "Password", "required|min_length[6]");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails chuyen ve trang login_view
               $this->load->view('login_view');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //chay function get_user kiem tra login
                    $usr_result = $this->login_model->get_user($username, $password);
                    if (!empty($usr_result)) //Neu $usr_result co gia tri
                    {
                         //luu gia tri vao mang 
                         $sessiondata = array(
                              'level' => $usr_result[0]['user_level'],
                              'user_id'=>$usr_result[0]['user_id'],
                         );
                         $this->session->set_userdata($sessiondata);
                         $this->login_model->insert_sslv($usr_result[0]['user_level'],$usr_result[0]['user_id']);
                         //redirect("admin");
                         $get_ss=$this->login_model->get_ss($usr_result[0]['user_id']);
                         if($get_ss[0]['ss_lv']==1){
                            redirect("welcome_admin");
                         }else{
                             redirect("diemdanh/index/{$usr_result[0]['user_id']}");
                         }
                         
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }
}?>
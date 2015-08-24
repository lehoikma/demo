<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class create_user extends CI_Controller
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
          $this->load->model('mcreater');
     }

     public function index()
     {
            $name = $this->input->post("name");
            $pass = $this->input->post("pass");
            $level = $this->input->post("level");

          
          $this->form_validation->set_rules("name", "name", "required");
          $this->form_validation->set_rules("pass", "pass", "required|min_length[6]");        
                 
          if ($this->form_validation->run() == FALSE)
          {
               
               $this->load->view('view_create_user');
               
          }
          else
          {
               if ($this->input->post('submit') == "login")
               {
                   $this->mcreater->insert_us($name,$pass,$level);  
                   redirect('user_list');            
               }
               else
               {
                    redirect('view_create_user');
               }
          }
     }
}
?>
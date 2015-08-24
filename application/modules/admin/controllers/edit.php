<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class edit extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('medit');
          $this->load->helper('url');
         
     }

     public function index($pid)
     {
         $name = $this->input->post("name");
         $pass = $this->input->post("pass");
         $level = $this->input->post("level"); 
         
          $this->form_validation->set_rules("name", "name", "required");
          $this->form_validation->set_rules("pass", "pass", "required|min_length[6]");         
          if ($this->form_validation->run() == FALSE)
          {
                $data['test']=$this->medit->medit_usss($pid);
                $this->load->view('view_edit',$data);
               
          }
          else
          {
              if ($this->input->post('btn_submit') == "Edit")
               {
                   $this->medit->medit_us($name,$pass,$level,$pid);
                    
                     redirect("user_list");
                              
               }
               else
               {
                    redirect('view_edit');
               }
          }
     }
             
}
?>
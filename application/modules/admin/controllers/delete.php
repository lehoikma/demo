<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class edit extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
          $this->load->model('mdelete');
         
     }

     public function index($pid)
     {
         $name = $this->input->post("name");
         $pass = $this->input->post("pass");
         $level = $this->input->post("level"); 
                    
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
                   redirect('view_list_user');
                              
               }
               else
               {
                    redirect('view_edit');
               }
          }
     }
             
}
?>
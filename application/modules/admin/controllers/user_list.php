<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class user_list extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('muser');
     }

     public function index()
     {
         $data['mu']=$this->muser->muser_select();
       
        $this->load->view('view_list_user',$data);        
     }
}
?>
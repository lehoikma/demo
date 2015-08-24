<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class medit extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
          $this->load->database();
     }

     //get the username & password from tbl_usrs
     function medit_us($name,$pass,$level,$pid)
     {
          $sql = "UPDATE user SET user_name='$name',user_pass='$pass',user_level='$level' WHERE user_id='$pid'";
          $query = $this->db->query($sql);
          //$data=$query->result_array();
          //return $data;
          
     }
      function medit_usss($p)
     {
          $sql = "select * from user WHERE user_id='$p'";
          $query = $this->db->query($sql);
          $data=$query->result_array();
          return $data;
          
     }
}?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from user where user_name = '" . $usr . "' and user_pass = '" .$pwd . "'";
          $query = $this->db->query($sql);
          $data=$query->result_array();
          //$level=$data[0]['user_level'];
          return $data;
     }
     // insert vao du lieu vao ss
     function insert_sslv($level,$user_id)
     {
        $sql="insert into ss (ss_lv,user_id) values ('{$level}','{$user_id}')";
        $query=$this->db->query($sql);
     }
     //lay du lieu o ss ra
     function get_ss($ss){
        $sql="select * from ss where user_id='{$ss}'";
        $query=$this->db->query($sql);
        $data1=$query->result_array();
        
         return $data1;
     }
}?>
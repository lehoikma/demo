<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mcreater extends CI_Model
{
     function __construct()
     {
          parent::__construct();
          $this->load->database();
     }
     function insert_us($a,$b,$c)
     {
        $sql="insert into user (user_name,user_pass,user_level) values ('{$a}','{$b}','$c')";
            $query=$this->db->query($sql);
     }
}?>
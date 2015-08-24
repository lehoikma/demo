<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class muser extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
          $this->load->database();
     }

     //get the username & password from tbl_usrs
     function muser_select()
     {
          $sql = "select * from user";
          $query = $this->db->query($sql);
          $data=$query->result_array();
          return $data;
     }
}?>
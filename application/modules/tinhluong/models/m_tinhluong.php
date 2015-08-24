<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_tinhluong extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function mtinh_luong_get_day(){
        $sql="select * from diemdanh";
        $query=$this->db->query($sql);
        $data=$query->result_array();
        return $data;
    }
}?>
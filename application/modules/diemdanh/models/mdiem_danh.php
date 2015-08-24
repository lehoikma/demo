<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdiem_danh extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    //get the username & password from tbl_usrs
    function mdiem_danh_select($p)
    {
        $sql = "select * from user where user_id={$p}";
        $query = $this->db->query($sql);
        $data=$query->result_array();
        return $data;

    }
    function mdiem_danh_insert($d,$t_s,$p)
    {
        $sql="insert into diemdanh (date,time_star,user_id)values ('$d','$t_s',$p)";
        $query=$this->db->query($sql);
    }
    function mdiem_danh_update($out,$date){
        $sql="update diemdanh set time_out='{$out}' where date='$date'";
        $query=$this->db->query($sql);
    }
    function mdiem_danh_check_time($u){
        $sql="select * from diemdanh where date ='{$u}'";
        $query=$this->db->query($sql);
        $data=$query->num_rows();
        return $data;}


}?>
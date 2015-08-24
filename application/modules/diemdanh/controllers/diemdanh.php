<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class diemdanh extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdiem_danh');
        $this->load->database();
        $this->load->helper('date');
    }

    public function index($ss){
        $data2=$this->mdiem_danh->mdiem_danh_select($ss);
        $name = $this->input->post("sex");
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $d=date('Y-m-d');
        $t=date('H:i:s');
        if($this->input->post('submit') == "submit"){

            $data=$this->mdiem_danh->mdiem_danh_check_time($d);
            if($data==0){
                    if(isset($name)&& $name=='online')
                        $this->mdiem_danh->mdiem_danh_insert($d,$t,$ss);
                        echo "Diem danh thanh cong";
            }else{
                    if(isset($name)&& $name=='offline'){
                        $this->mdiem_danh->mdiem_danh_update($t,$d);
                        echo "ban da offline";
                    }else{
                        echo "ko dc diem danh";
                    }
            }
        }

        $data1 = array(
            'test' => $data2,
        );

        $this->load->view('view_diem_danh',$data1);

    }


}
?>
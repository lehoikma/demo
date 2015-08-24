<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tinhluong extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tinhluong');
        $this->load->helper('url');
        $this->load->library('dompdf_gen');

    }

    public function index()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $d=date('Y-m-d');
        $t=date('H:i:s');
        $get_day=$this->m_tinhluong->mtinh_luong_get_day();
        $dem_day1=array();
        foreach ($get_day as $row)
        {
            $dem_day=$row['date'];
            $ngay=substr($dem_day,8);
            array_push($dem_day1,$ngay);
        }
        $mang=array(
            'so1'=>$dem_day1,
            'so2'=>$get_day
        );
       $this->load->view('view_tinhluong',$mang);
       // require_once "dompdf_config.inc.php";

        //$dompdf = new DOMPDF();
        $html=$this->output->get_output();
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();


        //file_put_contents("saved_pdf.pdf", $h);
        //$dompdf->render();
        $this->dompdf->stream("hihi.pdf",array('Attachment'=>0));
      // $this->dompdf->stream("hihi.pdf");


    }

}
?>
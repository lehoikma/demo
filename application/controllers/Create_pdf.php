<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_pdf extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function create()
    {
        $this->load->library('Mpdf');

        $html = "<b>Ví Dụ</b><br />Xuất file PDF";

        $mpdf = new Pdf();

        $mpdf->SetAutoFont(AUTOFONT_ALL);

        $mpdf->WriteHTML($html);

        $mpdf->Output("file/mpdf.pdf",'I');
        
    }
}
?>
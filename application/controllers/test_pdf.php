<?php
class test_pdf extends CI_Controller {
    public function pdf()
    {
        $this->load->helper(‘pdfexport_helper.php’);
        $urlId  = $this->uri->segment('3');
        if($urlId == "export") {

            $data['pageTitle'] = "Annual Report";
            $data['htmView'] = $this->load->view('annualreport_view',$data,TRUE);
            $templateView  = $this->load->view('../template_export',$data,TRUE);
            exportAsMPdf($templateView,$data['filename']);
            'OR'
            exportAsDomPdf($htmView,$fileName);
        }
    }
}
?>




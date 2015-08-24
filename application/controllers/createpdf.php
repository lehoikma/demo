<?php
class Createpdf extends CI_Controller {
	public function pdf()
	{
		$this->load->helper('pdf_helper');
		$this->load->view('pdfreport');
	}
}
?>
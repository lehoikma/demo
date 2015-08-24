<?php
/*
* Subject          : Export pdf using dompdf
* Author           : Sanjay
* Version          : CodeIgniter_2.0.3
*/

if ( ! function_exists('exportMeAsDOMPDF')) {

     function exportAsDomPdf($htmView, $fileName) 
     {

         $CI =& get_instance();
         $CI->load->helper(array('dompdf', 'file'));
         $CI->load->helper('file');
         $pdfName = $fileName;
         $pdfData = pdf_create($htmView, $pdfName);
         write_file('Progress Repost', $pdfData);   
     }
}

?>
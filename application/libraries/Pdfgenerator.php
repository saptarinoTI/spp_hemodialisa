<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdfgenerator{
	function buatPDF($html, $filename='', $download=TRUE, $paper='A4', 
		$orientation='portrait'){
		$options = new Options();
		$options->set('defaultFont', 'Courier');
		$options->set('isRemoteEnabled', TRUE);
		//$options->set('debugKeepTemp', TRUE);
		$options->set('isHtml5ParserEnabled', TRUE);
		$options->set('chroot', '/');
		$options->setIsRemoteEnabled(true);

		$dompdf = new Dompdf($options);
		$dompdf->set_option('isRemoteEnabled', TRUE);
		//$dompdf = new DOMPDF();

        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);
        $dompdf->render();
        if($download)
            $dompdf->stream($filename.'.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename.'.pdf', array('Attachment' => 0));
    }
}
?>
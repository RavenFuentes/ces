<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdfreport
 *
 * @author TOHIBA
 */tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, array(100, 100), true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Good Moral";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage('L');
ob_start();

foreach ($user as $u) {
    $data = '<div align="center"><img src="/good_moral_img/logo.png" style="width:20px;"/><img src="/good_moral_img/logo.png" style="width:20px;"/>






    </div> '.$u->firstname.' ';
}






$content = $data;
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');

$obj_pdf->Output('output.pdf', 'I');
?>

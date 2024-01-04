<?php
namespace Usuario\FormPdfPhp;
require 'vendor/autoload.php';

function pdf2(){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/2.pdf');
    $tplIdx = $mpdf->importPage(1);

    // use the imported page and place it at point 0,0 with a width of 215.9 mm   (This is the image of the included pdf)
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(255, 0, 0);
    $mpdf->SetFont('Arial', 'R', 12);

    $mpdf->WriteText(13.5,24,"<Customer Name>");
    $mpdf->WriteText(13.5,28,"<Address 1>");
    $mpdf->WriteText(13.5,32,"<Address 2>");

    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(43,40.5,"<Phone Number>");
    $mpdf->WriteText(43,44.5,"<Email Address>");
    $mpdf->WriteText(43,48.5,"<SELF-REPRESENTED>");

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(82,53.5,"<County>");
    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(35,57.5,"<Court Street Address>");
    $mpdf->WriteText(35,61.5,"<Court Street Address>");
    $mpdf->WriteText(35,65,"<Court City>, <Court Zip Code>");
    $mpdf->WriteText(35,69,"<Court City>, <Court Name>");

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(13.5,78,"<Creditor Name>, <Customer Name>");

    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(43.5,93,"<Customer Name>");
    $mpdf->WriteText(43.5,97,"<Plantiff Name>");

    $mpdf->SetFont('Arial', 'R', 9);
    $mpdf->WriteText(141,94,"<Case Number>");

    $mpdf->SetFont('Arial', 'R', 7);
    $mpdf->WriteText(15,250,"<Customer Name>");

    $mpdf->Output('tmp/newpdf2.pdf');
}


?>
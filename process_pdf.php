<?php
namespace Usuario\FormPdfPhp;
require 'vendor/autoload.php';

function pdf1($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/1.pdf');
    $tplIdx = $mpdf->importPage(1);

    // use the imported page and place it at point 0,0 with a width of 215.9 mm   (This is the image of the included pdf)
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(0, 0, 0);
    $mpdf->SetFont('Arial', 'R', 9);

    $mpdf->WriteText(13.5,23,$_POST['first_name']." ".$_POST['last_name']);
    $mpdf->WriteText(13.5,26.5,$_POST['street_address']);
    $mpdf->WriteText(13.5,30,$_POST['city_address'].', '.$_POST['state_address']." ".$_POST['zip_code']); # ADRESS 2?

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(32,35,$_POST['phone']);
    $mpdf->WriteText(43,43,$_POST['email']);
    $mpdf->WriteText(39,47.5,"SELF-REPRESENTED");
    $mpdf->WriteText(82,53.5,$_POST['county']);
 
    $mpdf->WriteText(13.5,65,$_POST['plaintiff_name'].', '.$_POST['first_name']." ".$_POST['last_name']);

    $mpdf->SetFont('Arial', 'R', 9);
    $mpdf->WriteText(42,79,$_POST['first_name']." ".$_POST['last_name']);
    $mpdf->WriteText(42,85,$_POST['plaintiff_name']);
    $mpdf->WriteText(42,91,"One");
    $mpdf->WriteText(136,76,$_POST['case_number']);

    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(2);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(3);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(4);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(5);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(6);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(7);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(8);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

function pdf2($filename,$timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/2.pdf');
    $tplIdx = $mpdf->importPage(1);

    // use the imported page and place it at point 0,0 with a width of 215.9 mm   (This is the image of the included pdf)
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(0, 0, 0);
    $mpdf->SetFont('Arial', 'R', 12);

    $mpdf->WriteText(13.5,24,$_POST['first_name']." ".$_POST['last_name']);
    $mpdf->WriteText(13.5,28,$_POST['street_address']);
    $mpdf->WriteText(13.5,32,$_POST['city_address'].', '.$_POST['state_address']." ".$_POST['zip_code']); // ADRESS 2?

    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(43,40.5,$_POST['phone']);
    $mpdf->WriteText(43,44.5,$_POST['email']);
    $mpdf->WriteText(43,48.5,"SELF-REPRESENTED");

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(82,53.5,$_POST['county']);
    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(35,57.5,$_POST["court_street_address"]);
    $mpdf->WriteText(35,61.5,$_POST["court_street_address"]);
    $mpdf->WriteText(35,65,$_POST["court_city_address"].", ".$_POST["court_zip_code"]);
    $mpdf->WriteText(35,69,$_POST["court_city_address"].", ".$_POST["court_name"]);

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(13.5,78,"<Creditor Name>, <Customer Name>");

    $mpdf->SetFont('Arial', 'R', 6);
    $mpdf->WriteText(43.5,93,$_POST['first_name']." ".$_POST['last_name']);
    $mpdf->WriteText(43.5,97,$_POST["plaintiff_name"]);

    $mpdf->SetFont('Arial', 'R', 9);
    $mpdf->WriteText(141,94,"<Case Number>");

    $mpdf->SetFont('Arial', 'R', 7);
    $mpdf->WriteText(15,250,$_POST['first_name']." ".$_POST['last_name']);

    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

function pdf3($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/3.pdf');
    $tplIdx = $mpdf->importPage(1);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

function pdf4($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/4.pdf');
   $tplIdx = $mpdf->importPage(1);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(0, 0, 0);
    $mpdf->SetFont('times', 'R', 11);

    $mpdf->WriteText(25.5,29.5,$_POST['first_name']." ".$_POST['last_name']);
    $mpdf->WriteText(25.5,34,$_POST['street_address']);  
    $mpdf->WriteText(25.5,38.5,$_POST['city_address'].', '.$_POST['state_address']." ".$_POST['zip_code']);
    $mpdf->WriteText(25.5,43,$_POST['phone']);  
    $mpdf->WriteText(25.5,47.5,$_POST['email']);
    
    $mpdf->WriteText(130,84,$_POST['county']);
    $mpdf->WriteText(25.5,114,$_POST['plaintiff_name']);
    $mpdf->WriteText(118,114,$_POST['case_number']);
    $mpdf->WriteText(25.5,138,$_POST['first_name']." ".$_POST['last_name'].",");
    $mpdf->WriteText(57.5,232.5,$_POST['first_name']." ".$_POST['last_name']);

    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(2);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(3);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(4);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(5);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(6);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(7);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(8);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->WriteText(102,152.5,$_POST['first_name']." ".$_POST['last_name']);

    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(9);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->SetFont('times', 'R', 12);
    $mpdf->WriteText(138.5,39.5,$_POST['county']);
    $mpdf->WriteText(124,49.5,$_POST['county']);
    $mpdf->WriteText(97,93.3,$_POST['case_number']);

    $mpdf->WriteText(25.5,172,$_POST['plaintiff_law_firm_name']);
    $mpdf->WriteText(25.5,182,$_POST["law_firm_street_address"]);
    $mpdf->WriteText(25.5,192,$_POST["law_firm_city_address"].', '.$_POST["law_firm_state_address"]);

    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

function pdf5($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/5.pdf');
    $tplIdx = $mpdf->importPage(1);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

function pdf6($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/6.pdf');
    $tplIdx = $mpdf->importPage(1);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(0, 0, 0);
    $mpdf->SetFont('Calibri', 'R', 10);

    $mpdf->WriteText(87.8,45,$_POST['case_number']);
    $mpdf->WriteText(25.5,178,$_POST['first_name']." ".$_POST['last_name']);

    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

?>
<?php
namespace Usuario\FormPdfPhp;
require 'vendor/autoload.php';

function pdf1($filename, $timestamp){
    $mpdf = new \Mpdf\Mpdf(['format'=>[215.9,279.4]]);
    $mpdf->setSourceFile(__DIR__ . '/templates/1.pdf');
    $tplIdx = $mpdf->importPage(1);

    // use the imported page and place it at point 0,0 with a width of 215.9 mm   (This is the image of the included pdf)
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);

    $mpdf->SetTextColor(255, 0, 0);
    $mpdf->SetFont('Arial', 'R', 9);

    $mpdf->WriteText(13.5,23,$_POST['first_name']);
    $mpdf->WriteText(13.5,26.5,"<Customer Address 1>");
    $mpdf->WriteText(13.5,30,"<Customer Address 2>");

    $mpdf->SetFont('Arial', 'R', 8);
    $mpdf->WriteText(32,35,"<Phone Number>");
    $mpdf->WriteText(43,43,"<Email Address>");
    $mpdf->WriteText(39,47.5,"<SELF-REPRESENTED>");
    $mpdf->WriteText(82,53.5,"<Case County>");
 
    $mpdf->WriteText(13.5,65,"<Plantiffs Name>, <Customer Name>");

    $mpdf->SetFont('Arial', 'R', 9);
    $mpdf->WriteText(42,79,"<Customer Name>");
    $mpdf->WriteText(42,85,"<Plantiff's Name>");
    $mpdf->WriteText(42,91,"One");
    $mpdf->WriteText(136,76,"<Case Number>");

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

    $mpdf->SetTextColor(255, 0, 0);
    $mpdf->SetFont('times', 'R', 11);

    $mpdf->WriteText(25.5,29.5,"#FNAME# #LNAME#");
    $mpdf->WriteText(25.5,34,"#STREET#");  
    $mpdf->WriteText(25.5,38.5,"#CITY#, #STATE# #ZIPCODE#");
    $mpdf->WriteText(25.5,43,"#PHONE#");  
    $mpdf->WriteText(25.5,47.5,"#EMAIL#");
    
    $mpdf->WriteText(130,84,"#COUNTY#");
    $mpdf->WriteText(25.5,114,"#PLAINTIFF#");
    $mpdf->WriteText(118,114,"#CASE#");
    $mpdf->WriteText(25.5,138,"#FNAME# #LNAME#,");
    $mpdf->WriteText(57.5,232.5,"#FNAME# #LNAME#");

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
    $mpdf->WriteText(102,152.5,"#FNAME# #LNAME#");

    $mpdf->addPage();
    $tplIdx = $mpdf->importPage(9);
    $mpdf->useTemplate($tplIdx, 0, 0, 215.9);
    $mpdf->SetFont('times', 'R', 12);
    $mpdf->WriteText(138.5,39.5,"#COUNTY#");
    $mpdf->WriteText(124,49.5,"#COUNTY#");
    $mpdf->WriteText(97,93.3,"#CASE#");

    $mpdf->WriteText(25.5,172,"#FIRMNAME#");
    $mpdf->WriteText(25.5,182,"#FIRMSTREET#");
    $mpdf->WriteText(25.5,192,"#FIRMADDR#, #FIRMSTATE#");

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

    $mpdf->SetTextColor(255, 0, 0);
    $mpdf->SetFont('Calibri', 'R', 10);

    $mpdf->WriteText(87.8,45,"<Case Number>");
    $mpdf->WriteText(25.5,178,"<Customer Name>");

    $mpdf->Output('tmp/'.$filename.'_'.$timestamp.'.pdf');
}

?>
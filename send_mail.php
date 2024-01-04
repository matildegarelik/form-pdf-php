<?php
namespace Usuario\FormPdfPhp;
require 'vendor/autoload.php';
require 'process_pdf.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$env = parse_ini_file('.env');

if(isset($_POST['submit-btn'])){

    $timestamp = strval(time());
    $pdf1_name="disc001-template";
    $pdf2_name="disc020-template input";
    $pdf3_name="disc020-blank";
    $pdf4_name="template creditor answer for single defendant";
    $pdf5_name="attachment one for disc020";
    $pdf6_name="Meet and Confer Letter";

    /*------ PROCESSING OF PDFs ------*/
    pdf1($pdf1_name,$timestamp);
    pdf2($pdf2_name,$timestamp);
    pdf3($pdf3_name,$timestamp);
    pdf4($pdf4_name,$timestamp);
    pdf5($pdf5_name,$timestamp);
    pdf6($pdf6_name,$timestamp);

    sleep(1);


    /*------ MAIL SENDING ------*/
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->SMTPAuth = true;

    $mail->Username = $env['FROM_USERNAME'];
    $mail->Password = $env['FROM_PASSWORD'];
    $mail->SetFrom($env['FROM_ADDRESS'], $env['FROM_FULL_NAME'],0);
    $mail->AddAddress($_POST['email'], $_POST['first_name'] || ' ' || $_POST['last_name']);

    $mail->Subject = $env['MAIL_SUBJECT'];
    $mail->MsgHTML($env['MAIL_BODY']);

    $mail->AddAttachment('tmp/'.$pdf1_name.'_'.$timestamp.'.pdf');
    $mail->AddAttachment('tmp/'.$pdf2_name.'_'.$timestamp.'.pdf');
    $mail->AddAttachment('tmp/'.$pdf3_name.'_'.$timestamp.'.pdf');
    $mail->AddAttachment('tmp/'.$pdf4_name.'_'.$timestamp.'.pdf');
    $mail->AddAttachment('tmp/'.$pdf5_name.'_'.$timestamp.'.pdf');
    $mail->AddAttachment('tmp/'.$pdf6_name.'_'.$timestamp.'.pdf');

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    if(!$mail->Send()) {
        echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
    } else {
        echo "Mensaje enviado!!";
    }

}else{
    echo "ERROR: ACCESS NOT ALLOWED";
}

?>
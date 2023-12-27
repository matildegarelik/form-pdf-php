<?php
namespace Usuario\FormPdfPhp;
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$env = parse_ini_file('.env');

if(isset($_POST['submit-btn'])){

    /*------ PROCESSING OF PDFs ------*/
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->setSourceFile(__DIR__ . '/templates/test2.pdf');
    $tplIdx = $mpdf->importPage(1);

    // use the imported page and place it at point 10,10 with a width of 200 mm   (This is the image of the included pdf)
    $mpdf->useTemplate($tplIdx, 10, 10, 200);

    // now write some text above the imported page
    $mpdf->SetTextColor(0, 0, 255);
    $mpdf->SetFont('Arial', 'B', 8);
    $mpdf->SetXY(95, 16);
    $mpdf->Write(0, 'MATILDE');
    $mpdf->Output('tmp/newpdf2.pdf');


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
    //$mail->AltBody = "Cuerpo alternativo del mensaje";
    $mail->MsgHTML($env['MAIL_BODY']);

    $mail->AddAttachment("tmp/newpdf.pdf");
    $mail->AddAttachment("tmp/newpdf2.pdf");

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
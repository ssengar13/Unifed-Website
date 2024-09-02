<?php

include '../smtp/class.phpmailer.php';
require('../smtp/class.smtp.php');

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "spectrumlynk@gmail.com";
    $mail->Password = "yvnjptzzchvffcjl";
    $mail->SetFrom("spectrumlynk@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    // $mail->SMTPOptions=array('ssl'=>array(
    //     'verify_peer'=>false,
    //     'verify_peer_name'=>false,
    //     'verify_self_signed'=>false,

    // ));
    if(!$mail->Send())
    {
        echo $mail->ErrorInfo;
    }
    else{
        return 'Sent';
    }
  

}



?>
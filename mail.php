<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("./assets/vendor/autoload.php");


    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $mailTo =  $_POST['email'];
        $phone = $_POST['phone'];
        $txt = 'You have received an e-mail from '.$name."\n\n Email : ". $mailTo. "\n\nPhone : " .$phone;
        $mailFrom = 'info@adorationholidays.com';
        //use PHP mailer to send email

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtpout.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = $mailFrom;
        $mail->Password = 'VNRA=z-CQ$V-';
        // $mail->SMTPSecure = 'tls';
        $mail->Port = 80;

        $mail->setFrom($mailFrom, $name);
        $mail->addAddress($mailTo);
        $mail->addReplyTo($mailFrom, $name);

        $mail->Subject = 'Contact Form';
        $mail->Body = $txt;

        if($mail->send()) {
            echo 'Message has been sent';
            header('Location: index.html?mailsend');
        } else {
            echo 'Message could not be sent.';
            header('Location: index.html?errorOccured');
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        echo $txt;
    }

?>
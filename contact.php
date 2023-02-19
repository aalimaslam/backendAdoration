<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("./assets/vendor/autoload.php");


    if(isset($_POST['submit'])) {

        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $mailTo =  $_POST['email'];
        $message = $_POST['message'];
        $name = $firstName . " " . $lastName;
        $txt = 'You have received an e-mail from '.$name."\n\n email : ". $mailTo. " \n\nMessage :" .$message;

        $mailFrom = 'helloguys13579@gmail.com';
        //use PHP mailer to send email

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $mailFrom;
        $mail->Password = 'fdglynfzaezxzxuw';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($mailFrom, $name);
        $mail->addAddress($mailTo);
        $mail->addReplyTo($mailFrom, $name);

        $mail->Subject = 'Form Submission || ' . $name;
        $mail->Body = $txt;

        if($mail->send()) {
            echo 'Message has been sent';
            header('Location: index.html?mailsend');
        } else {
            echo 'Message could not be sent.';
            header('Location: index.html?errorOccured');
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }

?>

?>
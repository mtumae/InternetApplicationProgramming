<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMail{
    public function send_mail($conf, $mailContent){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $conf['mail_host'];                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $conf['mail_username'];                  //SMTP username
            $mail->Password   = $conf['mail_password'];                     //SMTP password
            $mail->SMTPSecure = $conf['mail_secure'];            //Enable implicit TLS encryption
            $mail->Port       = $conf['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($mailContent['email_from'], $mailContent['name_from']);
            $mail->addAddress($mailContent['email_to'], $mailContent['name_to']);              //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // if(!empty($recepients)){
            //     foreach($recepients as $recipient){
            //         $mail->addCC($recipient);
            //     }
            // }
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $mailContent['subject'];
            $mail->Body    = $mailContent['body'];
            $mail->AltBody = "none";

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}
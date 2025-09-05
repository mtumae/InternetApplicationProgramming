<?php

require_once 'plugins/PHPMailer/mail.php';


$mail = new Mail();
$email = $_POST['email'];


if(isset($_POST['email'])) {
    $mail->forgotPassword($email);
}else{
    
}
print "<p>We have sent an email requesting you to confirm that you want to reset your password</p>";
?>
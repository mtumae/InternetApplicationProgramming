<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once 'autoload.php';
require_once 'plugins/PHPMailer/mail.php';
// require_once 'plugins/PHPMailer/src/Exception.php';
// require_once 'plugins/PHPMailer/src/PHPMailer.php';



print "<p>Running index.php...</p>";
$mail = new Mail();
$form = new forms();
print $form->signUp();
if (isset($_POST['send_mail'])) {
    // Call the mail sending function here
    $mail->sendMail('recipient@example.com', 'Subject', 'Body');
}



$hello = new hello();
$form = new forms();
$layout = new layout();

// print $hello->greet();
// print $hello->today();
// print $form->signUp();
// print $layout->header($conf);
// print $layout->footer($conf);


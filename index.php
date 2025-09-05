<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once 'autoload.php';
require_once 'conf.php';
require_once 'plugins/PHPMailer/mail.php';
// require_once 'plugins/PHPMailer/src/Exception.php';
// require_once 'plugins/PHPMailer/src/PHPMailer.php';
//print "<p>Running index.php...</p>";

//$conf = include 'conf.php';
$mail = new Mail();
$form = new forms();
$hello = new hello();
$form = new forms();
$layout = new layout();


print $layout->header($conf);
print $form->signIn();
if(!isset($_POST['password'])) {
    // Call the login function here
    $form->forgotemail();
}
print $layout->footer($conf);
?>



<?php


// print $hello->greet();
// print $hello->today();
// print $form->signUp();
// print $layout->header($conf);
// print $layout->footer($conf);


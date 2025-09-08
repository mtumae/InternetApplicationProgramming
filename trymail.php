<?php
require "autoload.php";
$mailContent = [
    'name_from'=> 'Mtume Owino dev',
    'email_from'=> 'mtume2016@gmail.com',
    'name_to'=> 'owino.mtume@strathmore.edu',
    'email_to'=> 'owino.mtume@strathmore.edu',
    'subject'=> 'Test Email',
    'body'=> 'This is a test email.'
];




$objsendmail->send_mail($conf, $mailContent);



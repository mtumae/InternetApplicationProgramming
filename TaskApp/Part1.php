<?php

require_once '../autoload.php';
require_once '../conf.php';



$layout = new layout();
$form = new forms();

$layout->header($conf);
$layout->navbar($conf);
$form->createAccount($conf);





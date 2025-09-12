<?php


require_once '../autoload.php';
require_once '../conf.php';
require_once '../api/db.php';


$api = new db();

$api->getAll();

?>
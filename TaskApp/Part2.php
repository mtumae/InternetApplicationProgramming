<?php


require_once '../autoload.php';
require_once '../conf.php';
require_once '../api/db.php';


$api = new db();

?>
<form method='POST' action=''>
            <label for='name'>Name:</label>
            <input type='text' id='name' name='name'>
            <br>
            <br>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email'>
            <br><br>
            <input type='submit' name="create_account" >
            <br>
</form>
<?php

if (isset($_POST['create_account'])) {
    echo "Creating account for " . $_POST['name'] . " with email " . $_POST['email'];
    $api->addUser($_POST['email'], $_POST['name']);
    $api->getAll($conf);
}


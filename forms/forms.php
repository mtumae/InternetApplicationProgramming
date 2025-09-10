<?php
require_once '../plugins/PHPMailer/mail.php';


class forms{
    public function createAccount($conf){
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
        $mail = new Mail();
        echo "Creating account for " . $_POST['name'] . " with email " . $_POST['email'];
        $mail->verifyEmail($conf, $_POST['email'], $_POST['name']);
    }
    }



public function signIn(){
    ?>
        <form method='POST' action=''>
            <label for='username'>Username:</label>
            <input type='text' id='username' name='username'>
            <br>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password'>
            <br>
            <a href='forgotemail.php'>Forgot Password?</a>
            <br>
            <input type='submit' value='Sign In'>
            <a href=''>Dont have an account? Sign up.</a>
        </form>
    <?php

}





public function forgotemail(){
    ?>
        <form method='POST' action='forgotemail.php'>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email'>
            <input type='submit' value='Submit'>
        </form>
    <?php
}



}


    
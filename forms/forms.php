<?php

class forms{
    public function signUp(){
?>
        <form method='POST' action=''>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email'>
            <br>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password'>
            <br>
            <label for='passwordconf'>Password Confirmation:</label>
            <input type='passwordconf' id='passwordconf' name='passwordconf'>
            <br>
            <input type='submit' value='Sign Up'>
            <a href='signin.php'>Already have an account? Sign in.</a>
        </form>

        
<?php

    if (isset($_POST['send_mail'])) {
        // Call the mail sending function here
        $mail->sendMail('recipient@example.com', 'Subject', 'Body');
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

    
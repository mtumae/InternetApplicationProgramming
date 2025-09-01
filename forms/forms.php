<?php

class forms{
    public function signUp(){
        return"
        <form method='POST' action=''>
            <label for='username'>Username:</label>
            <input type='text' id='username' name='username'>
            <label for='password'>Password:</label>
            <input type='password' id='password' name='password'>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email'>
            <input type='submit' value='Sign Up'>
        </form>
        ";
    }
}
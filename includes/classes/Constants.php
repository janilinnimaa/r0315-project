<?php

// Error messages for the user input in register.php 
class Constants {
    
    public static $passwordsDoNotMatch = "Your passwords don't match";
    public static $passwordNotAlphaNumeric = "Your password can only contain numbers and letters";
    public static $passwordCharacters = "Your password must be between 8 and 30 characters";
    public static $emailInvalid = "Email is invalid";
    public static $emailsDoNotMatch = "Your emails don't match";
    public static $emailTaken = "This email is already in use";
    public static $lastNameCharacters = "Your lastname must be between 2 and 25 characters";
    public static $firstNameCharacters = "Your firstname must be between 2 and 25 characters";
    public static $usernameCharacters = "Your username must be between 5 and 25 characters";
    public static $usernameTaken = "This username already exits";
    
    public static $loginFailed = "Your username or password was incorrect";


}
?>
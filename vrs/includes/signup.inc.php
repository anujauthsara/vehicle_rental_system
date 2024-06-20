<?php

if(isset($_POST["submit"])){
    $firstName=$_POST["first_name"];
    $lastName=$_POST["last_name"];
    $mobileNumber=$_POST["mobile_number"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmPassword=$_POST["confirm_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($firstName,$lastName,$mobileNumber,$email,$password,$confirmPassword);
    $invalidEmail=invalidEmail($email);
    $pwdMatch=pwdMatch($password,$confirmPassword);
    $emailExists=emailExists($conn,$email);

    if($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if($pwdMatch !== false){
        header("Location:../signup.php?error=passwordsdontmatch");
        exit();
    }
    if($emailExists !== false){
        header("Location:../signup.php?error=emailtaken");
        exit();
    }

    createUser($conn,$firstName,$lastName,$mobileNumber,$email,$password); 

}
else{
    header('Location:../login.php');
    exit();
}

<?php

function emptyInputSignup($firstName,$lastName,$mobileNumber,$email,$password,$confirmPassword){
    $result;
    if(empty($firstName)||empty($lastName)||empty($mobileNumber)||empty($email)||empty($password)||empty($confirmPassword)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function pwdMatch($password,$confirmPassword){
    $result;
    if($password !== $confirmPassword){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function emailExists($conn,$email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);

    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn,$firstName,$lastName,$mobileNumber,$email,$password){
    $sql="INSERT INTO users (usersfName,userslName,usersMobile,usersEmail,usersPwd) VALUES(?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../signup.php?error=stmtfailed");
            exit();
        }
        $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$mobileNumber,$email,$hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../login.php?error=none");
        exit();    
}

function emptyInputLogin($email,$password){
    $result;
    if(empty($email)||empty($password)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function LoginUser($conn,$email,$password){
    $emailExists=emailExists($conn,$email);
    if($emailExists===false){
        header("Location:../signup.php?error=wronglogin");
        exit();
    }
    $pwdHashed=$emailExists["usersPwd"];
    $checkPwd=password_verify($password,$pwdHashed);

    if($checkPwd===false){
        header("Location:../signup.php?error=wronglogin");
        exit();
    }else if($checkPwd===true){
        session_start();
        $_SESSION["userid"]=$emailExists["usersId"];
        $_SESSION["useremail"]=$emailExists["usersEmail"];
        $_SESSION["username"]=$emailExists["usersfName"];
        header("Location:../index.php");
        exit();
    }

}
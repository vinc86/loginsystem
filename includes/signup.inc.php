<?php


if(isset($_POST["submit"])){

    $usrName = $_POST["usrName"];
    $usrEmail = $_POST["usrEmail"];
    $usrPwd = $_POST["usrPwd"];
    $ConfPwd = $_POST["confirmPwd"];


    if( empty($_POST["usrName"]) || empty($_POST["usrEmail"]) || empty($_POST["usrPwd"]) || empty($_POST["confirmPwd"]) ){
        header("Location: ../signup.php?error=emptyfields&usrname=".$usrName ."&email=".$usrEmail);
        exit();
    } 
    if(!filter_var($usrEmail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&usrname=".$usrName);
        exit();
    }
    if(!preg_match("/[a-zA-Z0-9]&/")){}
       
    


}
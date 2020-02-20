<?php


if(isset($_POST["submit"])){
    if(!empty($_POST["usrFirst"]) || !empty($_POST["usrLast"]) || !empty($_POST["usrEmail"]) || !empty($_POST["usrCity"]) ){
        
        session_start();
        
        $first = $_POST["usrFirst"];
        $last = $_POST["usrLast"];
        $email = $_POST["usrEmail"];
        $first = $_POST["usrCity"];

        $_SESSION["user"] = $_POST["usrFirst"];


        header("Location: ../index.php");
        exit();



    } else {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }


}
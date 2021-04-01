<?php
    include('config.php');
    session_start();                    
    $login_session = $_SESSION['login_user']; 

    //echo($login_session . "hii"); 
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
?>
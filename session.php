<?php
    include('config.php');
    session_start();                    
    $login_session = $_SESSION['login_user']; 
    
    $ses_sql = mysqli_query($con ,"select uid from tblusers where username = '$login_session' ");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC); 
    $login_id = $row['uid'];

    //echo($login_session . "hii"); 
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
?>
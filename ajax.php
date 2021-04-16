<?php
    include("session.php");
    if(isset($_GET['proid'])){
        $sql_query = "SELECT * FROM tblproducts where pid = '.$_GET['proid'].'";
        $resultset = mysqli_query($con, $sql_query) or die("database error:" . mysqli_error($conn));
        if(mysqli_num_rows($resultset) > 0){
            if($row = mysqli_fetch_assoc($resultset)) {
                
            }

        }    
    }
?>
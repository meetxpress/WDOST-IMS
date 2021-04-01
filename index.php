<?php
   include("config.php");
   session_start();   
    if($_SERVER["REQUEST_METHOD"] == "POST") {       
        if(isset($_POST['btnLogin'])){
                        $result = mysqli_query($con, "SELECT * FROM tblusers WHERE username = '".$_POST['username']."' and pass = '".$_POST['password']."'");
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);                                    
            $count = mysqli_num_rows($result);                              
            if($count == 1) { 
                $_SESSION['login_user'] = $_POST['username'];                                                                  
                header("Location: dashboard.php");                
            } else {                
                echo "<script>alert('Your Login Name or Password is invalid')</script>";
            }
        }      
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMS-20MCA085-135</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
</head>

<body class="index-body">
    <center>
        <h2>Welcome to Inventory Management System</h2>
    </center>
    <div class="parent">
        <div class="child">
            <center>
                <h3>Login</h3>
            </center>
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Username: </label>
                    <input type="text" name="username" placeholder="Enter your username" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control" />
                </div>

                <div class="form-group btnLogin">
                    <input type="submit" name="btnLogin" value="Login" class="btn btn-primary form-control w-50" />
                </div>
                <hr class="hr1">
                <div class="form-group btnLogin" style="justify-content: space-between;">
                    <a href="">Forgot Password?</a>
                    <a href="register.php">Does not have an Account?</a>
                </div>

            </form>
        </div>
    </div>

    <script src="assets/main.js"></script>
</body>

</html>
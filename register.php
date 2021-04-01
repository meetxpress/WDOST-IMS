<?php
    include("config.php");    
    if(isset($_POST['btnRegister'])){
        if($con){                      
            $res = mysqli_query($con, "INSERT INTO tblusers(uname, username, pass, email, phno, uadd) VALUES('".$_POST['reg_name']."', '".$_POST['reg_usename']."', '".$_POST['reg_password']."', '".$_POST['reg_email']."', '".$_POST['reg_phno']."', '".$_POST['reg_address']."')");
            if(!$res){
                echo ("<h1>Dead!</h1>");	
            } else{
                echo "<script>alert('Registration has been done Successfully.');
                // window.location.replace('login.php');
                </script>";                     
            }            
        }else{
            echo "Can't Connect!";
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
    <div class="reg-parent">
        <div class="reg-child">
            <center>
                <h3>Register User</h3>
            </center>
            <form method="POST" action="#">
                <div class="form-group">
                    <label>Full Name: </label>
                    <input type="text" name="reg_name" placeholder="Enter your Full name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Username: </label>
                    <input type="text" name="reg_usename" placeholder="Enter your username" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="reg_password" placeholder="Enter your password" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="reg_email" placeholder="Enter your Email Address" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Contact Number: </label>
                    <input type="text" name="reg_phno" placeholder="Enter your Contact Number" maxlength="10"
                        class="form-control" />
                </div>
                <div class="form-group">
                    <label>Address </label>
                    <input type="text" name="reg_address" placeholder="Enter your Address(City Only)"
                        class="form-control" />
                </div>
                <div class="form-group btnLogin">
                    <input type="submit" name="btnRegister" value="Register"
                        class="btn btn-primary form-control w-50" />
                </div>
                <hr class="hr1">
                <div class="form-group btnLogin">
                    <a href="index.php">Already have an Account?</a>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/main.js"></script>
</body>

</html>
<?php
    include("session.php");
    
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

<body>
    <div class="main-container">

        <div class="navigation-bar">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand ml-3" href="#">Inventory Management System</a>

                <ul id="navbar-nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert_record.php">Insert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update_record.php">Update</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="reorder.php">Re-order</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="user-header">
                <h1 class="header-welcome-msg">Re-Order Stock</h1>
                <hr class="hr1">
            </div>

            <div class="main-body">

            </div>
        </div>
        <div class="footer">
            <p>Developed By <b>20MCA085</b> & <b>20MCA135</b></p>
        </div>

    </div>
    <script src="assets/main.js"></script>
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
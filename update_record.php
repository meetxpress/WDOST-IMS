<?php
include("session.php");
if ($login_session == "") {
    header("location:index.php");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['btnLogin'])) {
            // $result = mysqli_query($con, "SELECT * FROM tblproducts WHERE username = '" . $_POST['username'] . "' and pass = '" . $_POST['password'] . "'");
            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // $count = mysqli_num_rows($result);
            // if ($count == 1) {
            //     $_SESSION['login_user'] = $_POST['username'];
            //     header("Location: dashboard.php");
            // } else {
            //     echo "<script>alert('Your Login Name or Password is invalid')</script>";
            // }

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
    <script src="assets/getdata.js"></script>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="update_record.php">Update</a>
                    </li>

                    <li class="nav-item">
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
                <h1 class="header-welcome-msg">Update Existing Record</h1>
                <hr class="hr1">
            </div>
            <div class="main-body">
                <form id="insert-form" action="#" method="POST">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 form-group">
                            <fieldset class="form-control pb-1">
                                <legend>Product Details:</legend>
                                <div class="container">
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Select Product</label>
                                        <select name="prod_cate" class="form-control" onchange="fillUpdate(this.value)">
                                            <option disabled selected>--- Select ---</option>
                                            <?php
                                            $sql_query = "SELECT * FROM tblproducts where uid = '$login_id'";
                                            $resultset = mysqli_query($con, $sql_query) or die("database error:" . mysqli_error($conn));
                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($resultset)) {
                                            ?>
                                            <option value="<?php echo $row['pid'] ?>"><?php echo $row['pname'] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Name</label>
                                        <input type="text" name="up_prod_name" placeholder="Item Name"
                                            class="form-control" />
                                    </div>

                                    <!-- <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Description</label>
                                        <input type="text" name="up_prod_desc" placeholder="Item Description" class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Category</label>
                                        <select name="up_prod_cate" class="form-control">
                                            <option disabled selected>--- Select ---</option>
                                            <option>Solid Product</option>
                                            <option>Liquid Product</option>
                                            <option>Semi-Solid Product</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Purchase date</label>
                                        <input type="date" name="up_prod_purdate" placeholder="Item Purchase Date" class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Price</label>
                                        <input type="text" name="up_prod_price" placeholder="Item Price" maxlength="5" class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Quantity</label>
                                        <input type="text" name="up_prod_qty" placeholder="Item Quantity" maxlength="5" class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Reorder Level</label>
                                        <input type="text" name="up_prod_relevel" placeholder="Item Reorder Level" maxlength="5" class="form-control" />
                                    </div>
-->
                                    <div class="col-lg-12 col-md-12 form-group pb-3">
                                        <label></label>
                                        <input type="submit" name="up_btnUpdate" value="Update Product"
                                            class="btn btn-primary form-control" />
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
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
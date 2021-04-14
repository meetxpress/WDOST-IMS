<?php
    include("session.php");

    if (isset($_POST['btnInsert'])) {
        if ($con) {
            $res = mysqli_query($con, "INSERT INTO tblproducts(uid, pname, category, descrip, pdate, price, qty, relevel) VALUES($login_id, '" . $_POST['prod_name'] . "', '" . $_POST['prod_cate'] . "', '" . $_POST['prod_desc'] . "', '" . $_POST['prod_purdate'] . "', " . $_POST['prod_price'] . ", " . $_POST['prod_qty'] . ", " . $_POST['prod_relevel'] . ")");
            if (!$res) {
                echo ("<h1>Dead!</h1>");
            } else {
                echo "<script>alert('Registration has been done Successfully.');
                    // window.location.replace('index.php');
                    </script>";
            }
        } else {
            echo "Can't connect!";
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

<body>
    <div class="main-container">
        <div class="navigation-bar">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand ml-3" href="#">Inventory Management System</a>

                <ul id="navbar-nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="insert_record.php">Insert</a>
                    </li>
                    <li class="nav-item">
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
                <h1 class="header-welcome-msg">Insert new Record</h1>
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
                                        <label for="prod_name">Product Name</label>
                                        <input type="text" name="prod_name" placeholder="Item Name"
                                            class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Description</label>
                                        <input type="text" name="prod_desc" placeholder="Item Description"
                                            class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Category</label>
                                        <select name="prod_cate" class="form-control">
                                            <option disabled selected>--- Select ---</option>
                                            <option>Solid Product</option>
                                            <option>Liquid Product</option>
                                            <option>Semi-Solid Product</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Purchase date</label>
                                        <input type="date" name="prod_purdate" placeholder="Item Purchase Date"
                                            class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Price</label>
                                        <input type="text" name="prod_price" placeholder="Item Price" maxlength="5"
                                            class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Quantity</label>
                                        <input type="text" name="prod_qty" placeholder="Item Quantity" maxlength="5"
                                            class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Reorder Level</label>
                                        <input type="text" name="prod_relevel" placeholder="Item Reorder Level"
                                            maxlength="5" class="form-control" />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group pb-3">
                                        <label></label>
                                        <input type="submit" name="btnInsert" value="Insert Product"
                                            class="btn btn-primary form-control" />
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
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
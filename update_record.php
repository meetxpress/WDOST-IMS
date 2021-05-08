<?php
    include("session.php");
    if ($login_session == "") {
        header("location:index.php");
    } else {   
        if (isset($_POST['pid'])) {
            $pid=$_POST['pid'];
            if(isset($_POST['up_btnUpdate'])){
                $query = "Update tblproducts set pname = '".$_POST['up_prod_name']."', category = '".$_POST['up_prod_cate']."', descrip = '".$_POST['up_prod_desc']."', pdate = '".$_POST['up_prod_purdate']."', price = '".$_POST['up_prod_price']."', qty = '".$_POST['up_prod_qty']."', relevel = '".$_POST['up_prod_relevel']."' where uid = '$login_id' and pid='".$_POST['pid']."'";
                if (mysqli_query($con, $query)) {
                    echo "<script>alert('Record updated successfully');</script>";
                } else {
                    echo "<script>alert('Error updating record: '.mysqli_error($con));</script>";                    
                }                
            }
        } else {
            $pid="";
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
    <script lang="javascript" type="text/javascript">
        function mySubmission() {
            document.updateProduct.submit();
        }
    </script>
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
                <form id="insert-form" name="updateProduct" action="#" method="POST">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 form-group">
                            <fieldset class="form-control pb-1">
                                <legend>Product Details:</legend>
                                <div class="container">
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Select Product</label>
                                        <select name="pid" class="form-control" required onchange="mySubmission()">
                                            <option value="s">Select...</option>
                                            <?php
                                                $sql_unit="select * from tblproducts where uid = '$login_id' ";                                
                                                $result_unit=mysqli_query($con, $sql_unit) or die("database error:" . mysqli_error($conn));

                                                if ($result_unit -> num_rows > 0) {
                                                    while ($row_unit=mysqli_fetch_assoc($result_unit)) {
                                                        if ($pid==$row_unit['pid']) {
                                                            echo "<option selected value='".$row_unit['pid']."'>".$row_unit['pname']."</option>";                                                                   
                                                            $pname=$row_unit['pname'];
                                                            $pcat=$row_unit['category'];
                                                            $pdesc=$row_unit['descrip'];
                                                            $pdate=$row_unit['pdate'];
                                                            $pprice=$row_unit['price'];
                                                            $pqty=$row_unit['qty'];
                                                            $preorder=$row_unit['relevel'];                                                                    
                                                        } else {
                                                            echo "<option value='".$row_unit['pid']."'>".$row_unit['pname']."</option>";
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Name</label>
                                        <input type="text" name="up_prod_name" value="<?php if (isset($pname)) { echo $pname; } ?>" class="form-control"
                                            required />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Description</label>
                                        <input type="text" name="up_prod_desc" value="<?php if (isset($pdesc)) { echo $pdesc; } ?>" class="form-control"
                                            required />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Category</label>
                                        <select name="up_prod_cate" class="form-control" required>
                                            <option disabled selected>--- Select ---</option>
                                            <option>Solid Product</option>
                                            <option>Liquid Product</option>
                                            <option>Semi-Solid Product</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Purchase date</label>
                                        <input type="date" name="up_prod_purdate" value="<?php if (isset($pdate)) { echo $pdate; } ?>" class="form-control"
                                            required />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Price</label>
                                        <input type="text" name="up_prod_price" value="<?php if (isset($pprice)) { echo $pprice; } ?>" maxlength="5" id="pprice"
                                            class="form-control" required />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Quantity</label>
                                        <input type="text" name="up_prod_qty" value="<?php if (isset($pqty)) { echo $pqty; } ?>" maxlength="5"
                                            class="form-control" required />
                                    </div>

                                    <div class="col-lg-12 col-md-12 form-group">
                                        <label for="prod_name">Product Reorder Level</label>
                                        <input type="text" name="up_prod_relevel" value="<?php if (isset($preorder)) { echo $preorder; } ?>" maxlength="5"
                                            class="form-control" required />
                                    </div>

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
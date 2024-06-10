
<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Creative Lapcare</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon"/>

    <!--=== All Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="col-md-9">
                    <h4><i class="fa fa-addressbook"></i>Order Form</h4><hr>
                    <form action="order.php" method="post">
                        <div class="form-group">
                            <label for="name" class="control-label">Full Name</label>
                            <input type="text"  class="form-control"placeholder="Enter your Name" 
                            name="name">

                        </div>
                        <div class="form-group">
                            <label for="phno" class="control-label">Phone-Number</label>
                            <input type="text" placeholder="Enter your Phone number" class="form-control" name="cus_phno">

                        </div>
                        <div class="form-group">
                            <label for="alt" class="control-label">Alternate Number</label>
                            <input type="number" placeholder="Enter your Alternate number" 
                            class="form-control" name="alt_phno">

                        </div>
                        <div class="form-group">
                            <label for="add" class="control-label">Address</label>
                            <textarea placeholder="Enter your address" class="form-control" rows="10" 
                            name="address"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="submit" style="color: black;">
                            <i class="fa fa-shopping-cart"></i>Place Order</button>                   
                     </form>
                     <hr>
                </div>
            </div>
        </div>
        <?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phno=$_POST['cus_phno'];
    $alt_phno=$_POST['alt_phno'];
    $address=$_POST['address'];


    if($name!=""&&$phno!=""&&$alt_phno!=""&&$address!=""){
    $sql="INSERT INTO order_details(cus_name,cus_phno,alt_phno,address) VALUES('$name','$phno','$alt_phno','$address')";
    if($con->query($sql))
    {
        echo '<script>alert("Ordered Placed")</script>';
    }
    else{
        echo "Insert Data Fail";
    }

}

else{
    echo "All field required";
}
}

else{
    echo "Please Enter All Datas";
}
?>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/jquery.min.js"></script>
    </body>
</html>
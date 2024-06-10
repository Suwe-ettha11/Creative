
<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>

<!-- <?php include("menu.php"); ?>  
 --><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <style>
        #tit{
            color: rgb(165, 91, 42);
        }
        h2,h3{
            color: blue;
        }
    </style>
</head>
<body>
                <div class="col-md-9">
                    <h2>Customize Order</h2><hr>
                    <h3><u><i>Contact Information</i></u></h3>
                    <form action="cust.php" method="post">
                        <div class="form-group">
                            <label for="name" class="control-label">Full Name</label>
                            <input type="text"  class="form-control"placeholder="Enter your Name" 
                            name="name">

                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Email-Id</label>
                            <input type="text"  class="form-control"placeholder="Enter your Email-Id" 
                            name="email">
                        <div class="form-group">
                            <label for="phno" class="control-label">Phone-Number</label>
                            <input type="text" placeholder="Enter your Phone number" class="form-control" name="cust_phno">

                        </div>
                        
                        <div class="form-group">
                            <label for="add" class="control-label">Address</label>
                            <textarea placeholder="Enter your address" class="form-control" rows="10" 
                            name="address"></textarea>
                        </div>
                        
                        <h3><u><i>Laptop Details</i></u></h3>
                        <hr>


                        <div class="form-group">
                            <label for="alt" class="control-label">Laptop Brand</label>
                            <input type="text" placeholder="Enter your laptop model" 
                            class="form-control" name="lap_brand">

                        </div>
                        <div class="form-group">
                            <label for="alt" class="control-label">Laptop Model</label>
                            <input type="textr" placeholder="Enter your laptop model" 
                            class="form-control" name="lap_model">

                        </div>
                        <div class="form-group">
                            <label for="add" class="control-label">Laptop Description</label>
                            <textarea placeholder="Write about your laptop for eg:ram" class="form-control" rows="10" 
                            name="lap_desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="add" class="control-label">Required Product Details:</label>
                            <textarea placeholder="Enter about the product you needed" class="form-control" rows="10" 
                            name="pro_req"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="add" class="control-label">Product Type:</label>
                            <select  class="form-control"name="pro_det">
                            <option value="New product">New Product</option>
                            <option value="Second-end">Second-end Product</option>
                            <option value="Both new or Second-end">Both Second-end (or)New Product </option>
                        </select>
                        </div>
                         <div class="form-group">
                            <label for="phno" class="control-label">Price Range</label>
                            <input type="text" placeholder="Enter price range" class="form-control" name="price_range">

                        </div>

                        <button type="submit" class="btn btn-success" name="submit">
                            <i class="glyphicon glyphicon-shopping-cart"></i>Place Order</button>                   
                     </form>
                     <hr>
                </div>
            </div>
        </div>
 <?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['cust_phno'];
    $address=$_POST['address'];
    $lap_brand=$_POST['lap_brand'];
    $lap_model=$_POST['lap_model'];
    $lap_desc=$_POST['lap_desc'];
    $pro_req=$_POST['pro_req'];
    $pro_det=$_POST['pro_det'];
    $price_range=$_POST['price_range'];


    if($name!=""&&$phno!=""&&$email!=""&&$lap_brand!=""&&$address!=""&&$lap_model!=""&&$lap_desc!=""&&$pro_req!=""&&$pro_det!=""&&$price_range!=""){
    $sql="INSERT INTO custom_order(usr_name,email,phno,address,lap_brand,lap_model,lap_desc,pro_detail,pro_req,price_range) VALUES('$name','$email','$phno','$address','$lap_brand','$lap_model','$lap_desc','$pro_det','$pro_req','$price_range')";
    if($con->query($sql))
    {
        echo '<script>alert("Ordered Placed!We will contact you within 2 days...")</script>';
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
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
    </body>
</html>
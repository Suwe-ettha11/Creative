
 <!DOCTYPE html>
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
    </style>
</head>
<body>
 <?php include("header.php"); ?> 
  <br><br><br><br><br><br>
   <main>
       <section class="service-features pt-30">
        <div class="container">
              
                  <h4><i class="fa fa-addressbook"></i>Order Form</h4><hr>
                  <?php
$con=mysqli_connect('localhost','root','','computer');
if(!$con){
die('Connection error' .mysqli_connect_error());
}
$id=$_GET['id'];
$query = "SELECT pro_name,pro_price FROM spare_table where id=$id";
$result = mysqli_query($con, $query);
$numrow = mysqli_num_rows($result);
if ($numrow==1) {
    $row=mysqli_fetch_assoc($result);
?>

<form action="s1.php" method="GET">
    <div class="form-group">
        <label for="name" class="control-label">Customer Name</label>
        <input type="text"  class="form-control"placeholder="Enter your Name" 
                            name="name"></div>
       <div class="form-group">
            <label  class="control-label">Phone-Number</label>
            <input type="text" placeholder="Enter your Phone number" class="form-control" name="cus_phno">

        </div>
                        <div class="form-group">
                            <label  class="control-label">Alternate Number</label>
                            <input type="text" placeholder="Enter your Alternate number" 
                            class="form-control" name="alt_phno">

                        </div>
                        <div class="form-group">
                            <label  class="control-label">Address</label>
                            <textarea placeholder="Enter your address" class="form-control" rows="10" 
                            name="address"></textarea>
                        </div>
  
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Product Name</label>
    <input type="text" name="pro_name"value="<?php echo ($row['pro_name']);?> "><br><br>
    <label>Product Price</label>
    <input type="text" name="pro_price"value="<?php echo ($row['pro_price']);?> "><br><br>
   <div class="form-group">
                            <label for="add" class="control-label">Payment Type:</label>
                        </div>
                         
                    <?php echo '<button type="submit" class="btn btn-success" name="submit" style="color: black;"><i class="glyphicon glyphicon-shopping-cart"></i> <a href="trans.php?id='.$id.'">Order Now</a></button>';
}
else {
    echo("Record not found");
}
?>
<?php 
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $cus_phno=$_GET['cus_phno'];
    $alt_phno=$_GET['alt_phno'];
    $address=$_GET['address'];
    $pro_price=$_GET['pro_price'];
    $pro_name=$_GET['pro_name'];
    if($name!=""&&$cus_phno!=""&&$alt_phno!=""&&$address!=""&&$pro_name!=""&&
        $pro_price!=""){

    $sql="INSERT INTO ord_tbl(name,cus_phno,alt_phno,address,pro_name,pro_price) VALUES(
    '$name','$cus_phno','$alt_phno','$address','$pro_name','$pro_price')";

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



</div>

</form>
</div>
</section>
<br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>   
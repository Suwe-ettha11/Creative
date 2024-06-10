<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>

<?php
$id=$_GET['id'];
$query = "SELECT * FROM acc_tbl where id=$id";
$result = mysqli_query($con, $query);
$numrow = mysqli_num_rows($result);
if ($numrow==1) {
    $row=mysqli_fetch_assoc($result);
?>


<?php include("header.php"); ?> 
<br><br><br><br><br><br>
<!-- main wrapper start -->
<main>
    <section class="service-features pt-30">
        <div class="container">
    
<div class="row">
<div class="col-lg-5 col-md-6">
	<img src="img/qr.jpeg" width="400" height="400">
</div>
</div>
<form action="test2.php" method="POST">
	<div class="form-group"><br>

    <label class="control-label">User Name</label>
    <input type="text"  class="form-control"placeholder="Enter your Name" 
                            name="name">
    </div>
        <div class="form-group"><br>
    <div class="form-group">
            <label  class="control-label">Phone-Number</label>
            <input type="text" placeholder="Enter your Phone number" class="form-control" name="phno">

    </div>
        <div class="form-group">
        <label  class="control-label">Address</label>
        <textarea placeholder="Enter your address" class="form-control" rows="10" name="address"></textarea> </div>
    <label class="control-label">Product Name</label><br>
    <input type="text"class="form-control" name="pro_name"value="<?php echo ($row['acc_name']);?> "><br>
    <label class="control-label">Product Price</label><br>
    <input type="text" class="form-control"name="pro_price" value="<?php echo($row['acc_price']);?>"><br>
    <label class="control-label">Transation Id</label>
    <input type="text"class="form-control" placeholder="Enter the transation id" name="tid"><br>

     
     <div><button type="submit" class="btn btn-success" name="submit" style="color: black;"><i class="glyphicon glyphicon-shopping-cart"></i>Order Now</button></div></div>
 </div>
<?php }
else {
    echo("Record not found");
}
?>



</section>

</main>
<br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>   
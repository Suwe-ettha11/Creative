<?php include("header.php"); ?> 


<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container mt-70">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>Laptop Spare</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Laptop Display Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="product-details-wrapper pt-60 pb-60">
        <div class="container">
            <div class="row">


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
$sql="SELECT * FROM spare_table where id=$id";
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if ($numrow==1) {
    $row=mysqli_fetch_assoc($result);

echo'<div class="col-lg-5 col-md-6">
                    <div class="product-large-slider slider-arrow-style slider-arrow-style__style-2">
                        <div class="pro-large-img">';
                            echo '
                <img src="admin/'. $row['pic'] .'">';
                echo'
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product-details-des">
                        <div class="product-content-list">
                            
                            <div class="product-name">
                                <h4>';echo  $row['pro_name'];
                                echo'
                                </h4>
                            </div>
                            
                            <p>';echo  $row['dis'];
                            echo'
                            </p>
                            <div class="availability mb-20 mt-40">
                                <h5>Price :  '; echo  $row['pro_price'];
                                echo'
                            </h5>
                            </div>
                            
                            <div class="availability mb-20 mt-40">
                                <h5>Availability:</h5>
                                <span>10 in stock</span>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit" style="color: black;"><i class="glyphicon glyphicon-shopping-cart"></i> <a href="billing.php?id='.$id.'">Order Now</a></button>
                        </div>
                    </div>
                </div>';




}
else {
    echo 'Record Not found';
}
?>        

</div>       
        </div>
    </div>
    <!-- page main wrapper end -->

 
</main>
<!-- main wrapper end -->


<?php include("footer.php"); ?> 
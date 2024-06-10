
<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
<?php include("header.php"); ?> 

<!-- main wrapper start -->
<main>
    <!-- hero slider area start -->
    <section class="hero-slider-area">
        <div class="hero-slider-active slider-arrow-style">
            <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <div class="slider-content">
                                    <h1>DESKTOP <Br /> SALES & SERVICE </h1>
                                    <p><b>We FIX !!! Any Brand,  Any Problem</b></p>
                                 
                                </div>
                                <div class="slider-img">
                                    <img src="assets/img/slider/slide_2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <div class="slider-content">
                                    <h1>LAPTOP  <Br />SALES & SERVICE </h1>
                                    <p><b>We FIX !!! Any Brand,  Any Problem</b></p>
                                   
                                </div>
                                <div class="slider-img">
                                    <img src="assets/img/slider/slide_1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-inner">
                                <div class="slider-content">
                                    <h1>Sales <Br />Spares & Accessories</h1>
                                    <p><b>We can provide quality and assurance the products.</b></p>
                                   
                                </div>
                                <div class="slider-img">
                                    <img src="assets/img/slider/slide_3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero slider area start -->

    <!-- service features start -->
    <section class="service-features pt-30">
        <div class="container">
            <div class="service-features-inner theme-color">
                <div class="single-features-item">
                    <div class="features-icon">
                        <i class="ion-laptop"></i>
                    </div>
                    <div class="features-content">
                        <h5>Laptop Spare</h5>
                        
                    </div>
                </div>
                <div class="single-features-item">
                    <div class="features-icon">
                        <i class="ion-usb"></i>
                    </div>
                    <div class="features-content">
                        <h5>Accessories</h5>
          
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service features end -->



    <!-- product tab area start -->
    <section class="product-tab pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Laptop Spare</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- product tab menu start -->
                    
                    <!-- product tab menu end -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab_one">
                            <div class="product-tab-wrapper">
                                <div class="row">

<?php 
$sql = 'SELECT * FROM spare_table';
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);

if($numrow>0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
echo'<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="product-item mb-50">
        <div class="product-thumb">
        <a href="display.php?id='.$id.'">
            ';
            
            echo '
                <img src="admin/'. $row['pic'] .'" alt="" style="height:250px !important; width:250px !important;">';

            echo '

            </a>
            <div class="quick-view-link">
                <a href="display.php?id='.$id.'"> <span
                    data-toggle="tooltip" title="Quick view"><i
                    class="ion-ios-eye-outline"></i></span> </a>
                </div>
            </div>
            <div class="product-content text-center">


                <div class="price-box">
                    <span class="regular-price">';echo  $row['pro_name'] ;
                    echo'
                    </span>
                </div>

            </div>
        </div>
    </div>';

}
    echo '</table>';
}
else {
    echo 'Record Not found';
}
?>
<div class="col-lg-3 col-md-4 col-sm-6 ">
    <div class="product-item mb-50 btn btn-warning">
        <div class="product-thumb">
            <a href="cust.php">
            <button style="height:200px !important; width:200px !important; color: black;">
        <i class="glyphicon glyphicon-shopping-cart"></i>Customize Order +
            </a>
            </div>

            </button>
            </div>
        </div>
    </div>
  </div>
              </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab area end -->



<section class="product-tab pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Accessories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- product tab menu start -->
                    
                    <!-- product tab menu end -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab_one">
                            <div class="product-tab-wrapper">
                                <div class="row">

<?php 
$sql = 'SELECT * FROM acc_tbl';
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);

if($numrow>0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
echo'<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="product-item mb-50">
        <div class="product-thumb">
        <a href="acc_display.php?id='.$id.'">
            ';
            
            echo '
                <img src="admin/'. $row['img'] .'" alt="" style="height:250px !important; width:250px !important;">';

            echo '

            </a>
            <div class="quick-view-link">
                <a href="acc_display.php?id='.$id.'"> <span
                    data-toggle="tooltip" title="Quick view"><i
                    class="ion-ios-eye-outline"></i></span> </a>
                </div>
            </div>
            <div class="product-content text-center">


                <div class="price-box">
                    <span class="regular-price">';echo  $row['acc_name'] ;
                    echo'
                    </span>
                </div>

            </div>
        </div>
    </div>';
}
    echo '</table>';
}
else {
    echo 'Record Not found';
}
?>
<div class="col-lg-3 col-md-4 col-sm-6 ">
    <div class="product-item mb-50 btn btn-warning">
        <div class="product-thumb">
            <a href="cust.php">
            <button style="height:200px !important; width:200px !important;">
        <i class="glyphicon glyphicon-shopping-cart"></i>Customize Order +
            </a>
            </div>

            </button>
            </div>
        </div>







                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab area end -->
</main>
<!-- main wrapper end -->


<?php include("footer.php"); ?> 
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/selena-v2/selena/product-details.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 08 Feb 2019 04:33:33 GMT -->
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

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header class="header-area">
    <!-- header top start -->
    
    <!-- header top end -->

    <!-- main menu start -->
    <div class="main-menu-area sticky is-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <div class="sticky-logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo_sticky.png" alt="brand logo">
                            </a>
                        </div>
                        <!-- main menu navbar start -->
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active"><a href="#">Home </a>
                                    
                                </li>
                                <li><a href="#">Laptop Spare <i class="fa fa-angle-down"></i></a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title"><a href="#"></a>
                                            <ul>
                                                <li><a href="display.html">Laptop Screen</a></li>
                                                <li><a href="#">Mother Board</a></li>
                                                <li><a href="#">Battery</a></li>
                                                
                                            </ul>
                                    </li>
                                        
                                        <li class="mega-title"><a href="#"></a>
                                            <ul>
                        
                                                <li><a href="#">Processor</a></li>
                                                <li><a href="#">Hard Disk</a></li>
                                                <li><a href="#">Ram</a></li>
                                                <li><a href="#">Wifi / Bluetooth</a></li>
                                            </ul>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Accessories</a>
                                    <ul class="megamenu dropdown">
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Keyboard</a></li>

                                                <li><a href="#">CD / DVD</a></li>
                                                <li><a href="#">Camera</a></li>
                                     </ul>
                                </li>
                                <li><a href="about-us.html">What We Do</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- main menu navbar end -->
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu end -->

</header>


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
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
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
            <a href="display15_6_40pin.php">';
            
            echo '
                <img src="admin/'. $row['pic'] .'" alt="" style="height:250px !important; width:250px !important;">';

            echo '

            </a>
            <div class="quick-view-link">
                <a href="display15_6_40pin.html"> <span
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


                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab area end -->
                </div>






























            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product-large-slider slider-arrow-style slider-arrow-style__style-2">
                        <div class="pro-large-img">
                            <img src="assets/img/product/display/display15_6_40pin/product-1.jpg" alt=""/>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/display/display15_6_40pin/product-1_1.jpg" alt=""/>
                        </div>
                        <div class="pro-large-img">
                            <img src="assets/img/product/display/display15_6_40pin/product-1_2.jpg" alt=""/>
                        </div>
                        
                    </div>
                    <div class="pro-nav slick-padding_2 slider-arrow-style slider-arrow-style__style-2">
                        <div class="pro-nav-thumb"><img src="assets/img/product/display/display15_6_40pin/product-1.jpg" alt=""/></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/display/display15_6_40pin/product-1_1.jpg" alt=""/></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/display/display15_6_40pin/product-1_2.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product-details-des">
                        <div class="product-content-list">
                            
                            <div class="product-name">
                                <h4><a href="product-details.html">Laptop Display Screen 15.6″ 40 PIN Paper LED</a></h4>
                            </div>
                            
                            <p>Brand New with 1366×768 resolution.
                                1 Year Replacement Warranty
                                Fully Compatible Manufactured
                                Please compare your product with the image provided before placing the order.
                                For Replacement : Product should not be Physically damaged, Burned or Black Dot on it.
                                Product images are for illustrative purposes only and may differ from the actual product. But fully compatible with laptop modal.</p>
                            <div class="availability mb-20 mt-40">
                                <h5>Price:</h5>
                                <span><b> ₹2,000.00</b> </span>
                            </div>
                            
                            <div class="availability mb-20 mt-40">
                                <h5>Availability:</h5>
                                <span>10 in stock</span>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit" >
                                <i class="fa fa-shopping-cart"></i><a href="order.php"style="color: black;">Order Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
    <!-- page main wrapper end -->


</main>
<!-- main wrapper end -->



<!-
<!--== Start Footer Area Wrapper ==-->
<footer class="footer-wrapper bg-gray">

    <!-- footer main area start -->
    <div class="footer-main-area">
        <div class="container">
            <div class="footer-main-inner bdr-top pt-30 pb-md-20 pb-sm-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>contact info</h4>
                            </div>
                            <div class="footer-widget-body">
                                <ul class="location-wrap">
                                    <li>
                                        <h6 class="title">location:</h6>
                                        <p>Gandhi maidanam,Ammapet<br>
Salem-636003, <Br>Tamilnadu,India. </p>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>Call Us Now</h4>
                            </div>
                            <div class="footer-widget-body">
                                <ul class="location-wrap">
                                   
                                     <li>
                                        <h6 class="title">call us now:</h6>
                                        <p>+9344466122</p>
                                    </li>
                                    <li>
                                        <h6 class="title">email:</h6>
                                        <p><a href="#">creativelapcare@gmail.com</a>
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget-title">
                                <h4>Social Link</h4>
                            </div>
                                <div class="footer-widget-body">
                                <ul class="location-wrap">
                                    <li>
                                        <h6 class="title"><a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i> &nbsp; FaceBook</a></h6>
                                        
                                    </li>
                                    <li>
                                        <h6 class="title"><a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i> &nbsp; Twitter</a></h6>
                                        
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer main area end -->

    <!-- footer bottom area start -->
    <div class="footer-bootom bg-gray pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text text-center text-md-left">
                        <p>© 2019 creativelapcare in. All Rights Reserved Creativelapcare</p>
                    </div>
                </div>
                <div class="col-md-6">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom area end -->

</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="assets/js/vendor.js"></script>
<!--=== All Plugins Js ===-->
<script src="assets/js/plugins.js"></script>
<!--=== Active Js ===-->
<script src="assets/js/active.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/selena-v2/selena/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 08 Feb 2019 04:33:12 GMT -->
</html>
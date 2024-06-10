
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
    



<section class="product-tab pt-160 pb-30">
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
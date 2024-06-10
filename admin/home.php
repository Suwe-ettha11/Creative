<?php
session_start();
?>
<style>
    
</style>
<?php include("menu.php"); ?> 

            <div class="wrap">
                <h4><i class="glyphicon glyphicon-user"></i>Welcome Admin</h4><hr>
                    <div class="row ">
                    <div class="col-md-7">
                        <div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-primary btn-lg"><a href="product.php"style=" color:black;">Add Products</a></button>
                        <button type="button" class="btn btn-info " ><a href="acc.php" style=" color:black;">Add Accessories
                    
                    </a></button>
                        <button type="button" class="btn btn-warning " >
                            <a href="all_product.php"style=" color:black;">Show Products</a></button>
                    

                        <button type="button" class="btn btn-info " ><a href="all_accessories.php"
                         style=" color:black;">Show Accessories</a></button>
                        </div>
                



                    </div>
                </div>
            </div>
    </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
    </body>
</html>
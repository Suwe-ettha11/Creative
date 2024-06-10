
<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>

<?php include("menu.php"); ?>  
                <div class="col-md-9">
                    <h4><i class="fa fa-addressbook"></i>Product Details
                    </h4><hr>
                    <form action="product.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="pname" class="control-label">Product Name</label>
                            <input type="text"  class="form-control"placeholder="Enter Product Name" name="pname">

                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Product Price </label>
                            <input type="text" placeholder="Enter Product Price" class="form-control" name="pprice">

                        </div>
                        <div class="form-group">
                            <label for="qty" class="control-label">Quantity</label>
                            <input type="number" placeholder="Enter Product Quantity" class="form-control" name="pqty">

                        </div>
                        <div class="form-group">
                            <label for="des" class="control-label">Product Descripition</label>
                            <textarea placeholder="Enter Product Descripition" class="form-control" rows="10" name="pdes"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="img" class="control-label">Product Image</label>
                        <input type="file" name="img">
                        </div>

                        <button type="submit" class="btn btn-success" name="submit"><i class="glyphicon glyphicon-save"></i>Save Details</button>                   
                     </form>
                     <hr>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <th>S.No</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Monitor</td>
                            <td>70000</td>
                            <td>2</td>
                            <td><a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a></td>
                            <td><a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                        </tr>

                     </table>
                </div>
            </div>
        </div>
        <?php
if(isset($_POST['submit'])){
    $name=$_POST['pname'];
    $price=$_POST['pprice'];
    $pqty=$_POST['pqty'];
    $pdes=$_POST['pdes'];

    $filename = $_FILES['img'] ['name'];
	$tempname = $_FILES['img'] ['tmp_name'];
	$folder ="proimages/".$filename;
	move_uploaded_file($tempname, $folder);


    if($name!=""&&$price!=""&&$pqty!=""&&$pdes!=""){
    $sql="INSERT INTO spare_table(pro_name,pro_price,dis,qty,pic) VALUES('$name','$price','$pdes','$pqty','$folder')";
    if($con->query($sql))
    {
        echo "Data Stored";
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
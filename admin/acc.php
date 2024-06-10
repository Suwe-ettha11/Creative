
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
                    <h4><i class="fa fa-addressbook"></i>Accessories Details</h4><hr>
                    <form action="acc.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="aname" class="control-label">Accessories Name</label>
                            <input type="text"  class="form-control"placeholder="Enter Accessories Name" name="aname">

                        </div>
                        <div class="form-group">
                            <label for="aprice" class="control-label">Accessories Price </label>
                            <input type="text" placeholder="Enter Accessories Price" class="form-control"name="aprice">

                        </div>
                        <div class="form-group">
                            <label for="qty" class="control-label">Quantity</label>
                            <input type="number" placeholder="Enter Accessories Quantity" 
                            class="form-control" name="aqty">

                        </div>
                        <div class="form-group">
                            <label for="des" class="control-label">Accessories Descripition</label>
                            <textarea placeholder="Enter Accessories Descripition"
                             class="form-control" rows="10" name="ades"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="img" class="control-label">Accessories Image</label>
                        <input type="file" name="img">
                        </div>

                        <button type="submit" class="btn btn-success" name="submit"><i class="glyphicon glyphicon-save">

                        </i>SaveDetails</button>                   
                     </form>
                     <hr>
                </div>
                
            </div>
        </div>
        <?php
if(isset($_POST['submit'])){
    $name=$_POST['aname'];
    $aprice=$_POST['aprice'];
    $aqty=$_POST['aqty'];
    $ades=$_POST['ades'];

    $filename = $_FILES['img'] ['name'];
	$tempname = $_FILES['img'] ['tmp_name'];
	$folder ="proimages/".$filename;
	move_uploaded_file($tempname, $folder);


    if($name!=""&&$aprice!=""&&$aqty!=""&&$ades!=""){
    $sql="INSERT INTO acc_tbl(acc_name,acc_price,disc,qty,img) VALUES('$name','$aprice','$ades','$aqty','$folder')";
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

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
                    <h4><i class="fa fa-addressbook"></i>Customized Orders Details
                    </h4><hr>
                    <div class="col-md-12">
                    <?php 
$sql = 'SELECT * FROM custom_order';
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if($numrow>0) {
	echo '<div class="table table-responsive">';
	echo '<table class="table table-striped">';
	echo '<tr>';
	echo '<th>Id</th>';
	echo '<th>Customer Name</th>';
	echo '<th>Email-Id</th>';
	echo '<th>Phone Number</th>';
	echo '<th>Address</th>';
	echo '<th>Laptop Brand</th>';
	echo '<th>Laptop Model</th>';
	echo '<th>Laptop Description</th>';
	echo '<th>Laptop Detail</th>';
	echo '<th>Product Required</th>';
	echo '<th>Price Range</th>';
	echo '<th>Delete</th>';
	'</tr>';
	$i=1;
	while($row = mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>' .$i.'</td>';
		echo '<td>' . $row['usr_name'] . '</td>';
		echo '<td>' . $row['email'] . '</td>';
		echo '<td>' . $row['phno'] . '</td>';
		echo '<td>' . $row['address'] . '</td>';
		echo '<td>' . $row['lap_brand'] . '</td>';
		echo '<td>' . $row['lap_model'] . '</td>';
		echo '<td>' . $row['lap_desc'] . '</td>';
		echo '<td>' . $row['pro_detail'] . '</td>';
		echo '<td>' . $row['pro_req'] . '</td>';
		echo '<td>' . $row['price_range'] . '</td>';
		// echo'<td><a href="update.php?id='.$id.'"class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i>Upadte</a></td>';

		echo'<td><a href="delete.php?id='.$id.'"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>';
		echo ('</tr>');

		$i++;
	}
	echo '</table></div>';
}
else {
	echo 'Record Not found';
}
?>
                </div>
                     <hr>
                </div>
                
            </div>
        </div>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
    </body>
</html>





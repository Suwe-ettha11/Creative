
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
                    <h4><i class="fa fa-addressbook"></i>Accessories Details
                    </h4><hr>
                    <div class="col-md-12">
                    <?php 
$sql = 'SELECT * FROM acc_tbl';
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if($numrow>0) {
	echo '<table class="table table-striped">';
	echo '<tr>';
	echo '<th>Id</th>';
	echo '<th>Images</th>';
	echo '<th>Name</th>';
	echo '<th>Price</th>';
	echo '<th>Qty</th>';
	echo '<th>Edit</th>';
	echo '<th>Delete</th>';
	'</tr>';
	$i=1;
	while($row = mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>' .$i.'</td>';
		echo '<td><img src="'. $row['img'] .'" width="100px"></td>';
		echo '<td>' . $row['acc_name'] . '</td>';
		echo '<td>' . $row['acc_price'] . '</td>';
		echo '<td>' . $row['qty'] . '</td>';
		echo'<td><a href="update.php?id='.$id.'"class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i>Upadte</a></td>';

		echo'<td><a href="delete.php?id='.$id.'"class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>';
		echo ('</tr>');
		$i++;
	}
	echo '</table>';
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




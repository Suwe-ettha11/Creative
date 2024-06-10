<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <style>
        #tit{
            color: rgb(165, 91, 42);
        }
        h2,h3{
            color: blue;
        }
    </style>
</head>
<body>

<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
  
                
<!--  <?php 
// $id=$_GET['id'];
$sql="SELECT * FROM spare_table";
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if ($numrow>0) {
    $row=mysqli_fetch_assoc($result);
    echo '<table>';
    echo '<tr>';
    echo '<th>Product Image</th>';
    echo '<th>Product Name </th>';
    echo '<th align="center">     Total Price </th>';
    // echo '<th></th>';
    '</tr>';
        echo '<tr>';
        echo '<td> <img src="admin/'. $row['pic'] .'" width="300px"></td>';
        echo '<td>' . $row['pro_name'] . '</td>';
        echo '<td>' . $row['pro_price'] . '</td>';'</tr>';
    echo '</table>';
}
else {
    echo 'Record Not found';
}
?>-->







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
                            <div class="availability mb-20 mt-40">
                                <h5>Price :  '; echo  $row['pro_price'];
                                echo'
                            </h5>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit" style="color: black;"><i class="glyphicon glyphicon-shopping-cart"></i><a href="#">Go for Transation</a></button>
                        </div>
                    </div>
                </div>';

}
else {
    echo 'Record Not found';
}
?> 
<script src="js/bootstrap.min.js"></script>
        <script src="jquery.min.js"></script>
    </body>
</html>      


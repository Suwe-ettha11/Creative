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
  
                
<?php 
 $id=$_GET['id'];
$sql="SELECT * FROM spare_table WHERE id=$id";
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if ($numrow>0) {
    $row=mysqli_fetch_assoc($result);
    echo '<div class="container"><form action="" method="post">
      <input type="hidden">
      <img src="admin/'. $row['pic'] .'" width="300px">
      <div class="flex">
      <div class="name">';echo $row['pro_name']; echo '</div>
         <div class="price">Nrs.= ';echo $row['pro_price'];echo '/-</div>
      </div>
      <input type="submit" class="delete-btn" name="delete">
   </form>



                            <div><button type="submit" class="btn btn-success" name="submit" style="color: black;"><i class="glyphicon glyphicon-shopping-cart"></i><a href="#">Buy</a></button></div>

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

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
a {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
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
 <?php include("header.php"); ?>  
 <br><br><br><br><br><br>
 <main>
       <section class="service-features pt-30">
        <div class="container">
            <?php 
 $id=$_GET['id'];
$sql="SELECT * FROM spare_table WHERE id=$id";
$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if ($numrow>0) {
    $row=mysqli_fetch_assoc($result);

                echo '<table class="table"border="1">';
    echo '<tr>';
    echo '<th><h2>Product Name</h2></th>';
    echo '<th><h2>Product Image</h2></th>';
    echo '<th><h2>Product Price</h2></th>';
    '</tr>';
    echo '<tr>';
  
        echo '<td><h3>' . $row['pro_name'] . '</h3></td>';
        echo '<td><img src="admin/'. $row['pic'] .'" width="100px"></td>';
        echo '<td><h3>₹  ' . $row['pro_price'] . '/- (+GST)</h3></td>';
          
        echo '</tr>';

        echo '</table>';
        echo '<h3 align="center">Select your payment Method....!</h3>
        
    <table align="center" border="1"><tr><th><a href="s1.php?id='.$id.'"><img src="img/cashon.png" class="rounded float-left-" alt="..."></a></th>
    <th><a href="trans.php?id='.$id.'"><img src="img/online.png" class="rounded float-center" alt="..."></a></th></tr>
    <tr><td align="center">Cash-on-delivery</td>
        <td align="center">Online Transation</td></tr>
 </div></table>';


}
else {
    echo 'Record Not found';
}
?> 
        </div>
    </section>
 </main>               

<br><br><br><br><br><br><br><br><br>
<?php include("footer.php"); ?>    


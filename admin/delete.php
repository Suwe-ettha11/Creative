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
    $sql="DELETE FROM spare_table where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
        header('location:all_product.php');
      }
      else
      {
        echo "Data Not Delete";
      }
  ?>
<?php 


    $id=$_GET['id'];
    $sql="DELETE FROM acc_tbl where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
        header('location:all_accessories.php');
      }
      else
      {
        echo "Data Not Delete";
      }
  ?>
  <?php 


    $id=$_GET['id'];
    $sql="DELETE FROM order_details where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
        header('location:home.php');
      }
      else
      {
        echo "Data Not Delete";
      }
  ?>
    <?php 


    $id=$_GET['id'];
    $sql="DELETE FROM ord_tbl where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
        header('location:home.php');
      }
      else
      {
        echo "Data Not Delete";
      }
  ?>
  <?php 


    $id=$_GET['id'];
    $sql="DELETE FROM payment where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
        header('location:home.php');
      }
      else
      {
        echo "Data Not Delete";
      }
  ?>
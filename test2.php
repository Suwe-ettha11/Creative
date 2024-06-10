<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pro_name=$_POST['pro_name'];
    $pro_price=$_POST['pro_price'];
    $trans_id=$_POST['tid'];
    $phno=$_POST['phno'];
    $address=$_POST['address'];
    if($name!=""&&$pro_name!=""&&$pro_price!=""&&$trans_id!=""&&$phno!=""&&$address!=""){

    $sql="INSERT INTO payment(name,phno,address,pro_name,pro_price,tid) VALUES('$name','$phno','$address','$pro_name',$pro_price,$trans_id)";

      if($con->query($sql))
        {
        echo '<script>alert("Order placed.....!")</script>';
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
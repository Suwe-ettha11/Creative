<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
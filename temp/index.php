<?php
$con= new mysqli('localhost','root','','computer');
if($con->connect_errno)
{
echo $con->connect_error;
die();
}

?>
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
    </style>
</head>
<body>
 
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="tit"><b>S</b><sup>2</sup></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li ><a href="#">Products</a></li>
                    <li><a href="#">Categery</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <button class="btn btn-danger navbar-btn">Search</button>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Text">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user" style="color:rgb(17, 173, 179)"></span> Sign Up</a></li>
                    <li><a href="mainindex.php"><span class="glyphicon glyphicon-log-in" style="color:rgb(33, 235, 33)"></span> Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;" id="logform">
        <div class="row">
            <div class="col-md-12">
                <h3><i class="glyphicon glyphicon-user"></i>User Login</h3>
                <hr>
            </div>
            <div class="col-md-6">
            <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="usr_name" class="control-label">User Name</label>
                        <input type="text" name="uname" id="name" class="form-control" placeholder="Enter your User Name">
                    </div>
                    
                        <div class="form-group">
                            <label for="p-word" class="control-label">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter your password">
                        </div>
                    <button class="btn btn-success" name="login"><a href="home.php">Login</a></button>
                </form>
            </div>
        </div>
    </div>
    
<?php
if(isset($_POST['login'])){
    $name=$_POST['uname'];
    $password=$_POST['pass'];
    if($name!=""&&$password!=""){
    $sql="INSERT INTO user_tbl(username,password) VALUES('$name','$password')";
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
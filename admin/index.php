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
                </form>
                
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
            <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="usr_name" class="control-label">User Name</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your User Name" required>
                    </div>
                    
                        <div class="form-group">
                            <label for="p-word" class="control-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="">
                        </div>
                    <button class="btn btn-success" name="login">Login</a></button>
                </form>
            </div>
        </div>
    </div>
    


<script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    </body>
</html>
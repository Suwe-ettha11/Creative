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
                    <li ><a href="home.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
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
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-3">
                    <h4><i class="glyphicon glyphicon-dashboard"></i>Dashboard</h4>
                    <hr>
                    <ul class="nav navbar-stacked">
                        <li class="active"><a href="home.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                        <li class="active"><a href="product.php"><i class="glyphicon glyphicon-tags"></i> Product</a></li>
                    
                        <li><a href="acc.php"><i class="glyphicon glyphicon-user"></i>Accessoriess</a></li>
                   </ul>
                  
                </div>
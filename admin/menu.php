<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <style>
 
        .navbar-brand{
            color: white;
        }
        .rpd{
            padding-right: 10px;
        }
    </style>
</head>
<body>
 
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php" id="tit">Admin Pannel</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-in" style="color:rgb(33, 235, 33)"></span> Log-out</a></li>

                </ul>
            </div>
        </div>
    </nav>
        <div class="container" style="margin-top: 50px; padding-top: 20px;">
            <div class="row">
                <div class="col-md-3">
                    <h4><i class="glyphicon glyphicon-dashboard"></i>Dashboard</h4>
                    <hr>
                    <ul class="nav navbar-stacked">
                        <li class="active"><a href="home.php"><i class="glyphicon glyphicon-home rpd"></i>Home</a></li>
                        <li class="active"><a href="product.php"><i class="glyphicon glyphicon-tags rpd"></i>Add Product</a></li>
                        <li class="active"><a href="all_product.php"><i class="glyphicon glyphicon-tags rpd"></i>All Product</a></li>
                        <li><a href="acc.php"><i class="glyphicon glyphicon-user rpd"></i>Add Accessoriess</a></li>
                        <li><a href="all_accessories.php"><i class="glyphicon glyphicon-user rpd"></i>All Accessoriess</a></li>
                        <li><a href="show orders.php"><i class="glyphicon glyphicon-tag rpd"></i>Customizes Orders</a></li>
                        <li><a href="cash_on.php"><i class="glyphicon glyphicon-tag rpd"></i>Cash on Orders</a></li>
                        <li><a href="online.php"><i class="glyphicon glyphicon-tag rpd"></i>Online Orders</a></li>
                   
                   </ul>
                  
                </div>
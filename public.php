<?php

   require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publish Public</title>
    <link href="bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png/jpeg" href="book.jpeg">
<style>
 body{
            background: url("backbaby.jpeg") no-repeat center center fixed;
           -webkit-background-size:cover;
           -moz-background-size:cover;
           -o-background-size:cover;
            background-size: cover;

        }
        .form{
              width: auto;
              background: rgba(0,0,0,0.5);
              margin: 2% ;
              padding: 30px 0;
              color:white;
              box-shadow: 0 0 10px 10px rgba(0,0,0);
        }
        .footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
    
</style>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="" style="color:white;">Tiny Publish</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="yourview1.php">Your-Page</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                    </ul>
                </div>
            </div>
     </div>
<br><br><br><center>
<h2 style="color:white;">Publish</24><br>
</center>
<div class="wrapper">
<div class="page-header2">

<?php
            $sql="SELECT * FROM public";

            $query=mysqli_query($link,$sql);
           
            while($res=mysqli_fetch_array($query)){
?>

<div class="form">      

<h4 style="color:white; text-align:center;"><?php echo $res['title']; ?></h4>
<p style="color:white;text-align:center;"><?php echo $res['test']; ?> </p>   

</div>
</div>

<?php
        }
?>  

<div class="footer">
  <p style=" color:white;">@ Publish UR Tiny Things in UR Tiny World</p>
</div>

</body>
</html>
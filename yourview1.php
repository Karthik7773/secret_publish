<?php

session_start();

require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Publish</title>
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
        /* .wrapper{ width: 350px; padding: 20px; margin:30px; } */
        .footer {
   margin-top:50%;         
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
                    <li><a href="public.php">Public-Views</a></li>
                    <li><a href="welcome.php">Writer</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                  
                    </ul>
                </div>
            </div>
     </div>
<br><br><br>

<center>
<h1 style="color:DeepPink;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br><br>your Published article</br><br></h1>
<h4 style="color:DeepPink;"><label for="">Your email-ID</label> <?php echo htmlspecialchars($_SESSION["email"]); $email=$_SESSION["email"];?> </h4>
</center>

<?php
            $sql="SELECT uid,useremail, title, test FROM userdetail u WHERE u.useremail = '$email'";

            $query=mysqli_query($link,$sql);
           
            while($res=mysqli_fetch_array($query)){
?>

<div class="form">      

<h4 style="color:white; text-align:center;"><?php echo $res['title']; ?></h4>
<p style="color:white;text-align:center;"><?php echo $res['test']; ?> </p>   

<input type="hidden" name="uid" class="form-control" value="<?php echo $res['uid']; ?>">
<input type="hidden" name="useremail" class="form-control" value="<?php echo $res['useremail']; ?>">
<center>
<div class="form-group">
    <a href="userupdate.php?id=<?php echo $res['uid'];?>" class="btn btn-info" role="button">Update</a>
    <a href="userdelete.php?id=<?php echo $res['uid'];?>" class="btn btn-danger" role="button">Delete</a>
    <a href="publish.php?id=<?php echo $res['uid'];?>" class="btn btn-info" role="button">Publish-To-Public</a>
</div>
</center>
</div>  


<?php

$_SESSION['uid']=$res['uid'];

$_SESSION['useremail']=$res['useremail'];

$_SESSION['title']=$res['title'];

$_SESSION['test']=$res['test'];

        }
?>   

<div class="footer">
  <p style=" color:white;">@ Publish UR Tiny Things in UR Tiny World</p>
</div>

</body>
</html>
<?php
   session_start();

   require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Publish updation</title>
    <link href="bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png/jpeg" href="book.jpeg">
    <style type="text/css">
    body{
            background: url("backbaby.jpeg") no-repeat center center fixed;
            background-size: 1500px 800px;
        }
    body{ font: 14px;}
    .wrapper { 
        width: 500px; 
        padding: 20px;
        }
    .page-header2{
              width: 500px;
              background: rgba(0,0,0,0.5);
              margin: auto;
              padding: 35px 30px;
              color:black;
              box-shadow: 10px 10px 10px 10px rgba(0,0,0);
        }

    </style>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body> 

<center><br><br><br>
<div class="container">
<div class="row col-sm">
<div class="wrapper">
<div class="page-header2">
<h2 style="color:white;">I ❤ TO</h2>
<h4 style="color:white;">Publish</h4>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"><br>

<label style="color:white;">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo htmlspecialchars($_SESSION["useremail"]); ?>" required> <br>

        <label style="color:white;">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($_SESSION["title"]); ?>" required> <br>

        <label style="color:white;">TEXT</label>
        <textarea style="height: 80px; width: 100%; " name="test"  required> <?php echo htmlspecialchars($_SESSION['test'])?></textarea><br><br>

        <input type="submit" class="btn btn-info" name="public" value="Publish" href="yourview1.php">

        <a href="yourview1.php" class="btn btn-info">back</a>

</form>
</div>
</div>
</div>
</div>
<?php

if(isset($_POST['public']))
{
    $id=$_SESSION['uid'];

    $email=$_SESSION["useremail"];
    $title=trim($_SESSION["title"]);
    $test=trim($_SESSION['test']);

    $sql="INSERT INTO `public`( `useremail`, `title`, `test`) VALUES ('$email','$title','$test')";

    $query=mysqli_query($link,$sql);

    header("location: yourview1.php");

    mysqli_close($link);
}



?>

</body>
</html>
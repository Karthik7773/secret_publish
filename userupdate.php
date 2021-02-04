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

        <label style="color:white;">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($_SESSION["title"]); ?>" required> <br>

        <label style="color:white;">TEXT</label>
        <textarea style="height: 80px; width: 100%; " name="test"  required> <?php echo htmlspecialchars($_SESSION['test'])?></textarea><br><br>

        <input type="submit" class="btn btn-info" name="publish" value="Update" href="yourview.php">

        <a href="yourview.php" class="btn btn-info">back</a>

</form>
</div>
</div>
</div>
</div>
<?php

if(isset($_POST['publish']))
{
    $id=$_SESSION['uid'];

    $uid=$_SESSION["uid"];

    $title=trim($_POST['title']);
    $test=trim($_POST['test']);

    $sql="UPDATE `userdetail` SET `title`='$title',`test`='$test' WHERE `uid`=$id";

    $query=mysqli_query($link,$sql);

    header("location: yourview1.php");

    mysqli_close($link);

}



?>

</body>
</html>
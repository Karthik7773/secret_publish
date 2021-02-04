<?php

session_start();

$test=$title="";
$test_err=$title_err="";

require_once "config.php";

if(isset($_POST['publish']))
{
    if(empty(trim($_POST["title"]))){
        $title_err = "Please enter test";
    } else{
        $title = trim($_POST["title"]);
    }

    if(empty(trim($_POST["test"]))){
        $test_err = "Please enter test";
    } else{
        $test = trim($_POST["test"]);
    }

    if(empty(trim($_SESSION["email"]))){
        $email_err = "Please enter test";
    } else{
        $email= trim($_SESSION["email"]);
    }

    
    if(empty(trim($_SESSION["username"]))){
        $username_err = "Please enter username";
    } else{
        $username= trim($_SESSION["username"]);
    }
    
    if(empty($test_err) && empty($email_err) && empty( $username_err) && empty($title_err))
    {
        $sql="INSERT INTO userdetail (uid, username, useremail,title, test) VALUES (?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
 
            mysqli_stmt_bind_param($stmt, "issss", $param_uid, $param_username, $param_useremail,$param_title, $param_test);

            $param_uid=$uid;
            $param_username=$username;
            $param_useremail= $email;
            $param_test= $test;
            $param_title=$title;

            if(mysqli_stmt_execute($stmt)){
               header("location: yourview1.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt); 
    }

    mysqli_close($link);
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Publish</title>
    <link href="bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png/jpeg" href="book.jpeg">
    <style type="text/css">
    body{
            background: url("backbaby.jpeg") no-repeat center center fixed;
            background-size: 1500px 800px;
        }
    body{ font: 14px;}
    .wrapper { width: 500px; padding: 20px; }
    .page-header2{
              width: 500px;
              background: rgba(0,0,0,0.5);
              margin: auto;
              padding: 35px 30px;
              color:black;
              box-shadow: 10px 10px 10px 10px rgba(0,0,0);
        }
        .page-header{
              width: auto;
              background: rgba(0,0,0,0.5);
              margin: 0% auto;
              margin-bottom:40px;
              padding: 40px 0;
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
                    <li><a href=" yourview1.php">MYviews</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                    </ul>
                </div>
            </div>
     </div>
<br><br><br>    

<center>
<div class="page-header">
<h1 style="color:DeepPink; font-size:40px;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br><br>Publish your article</br><br></h1>
<h4 style="color:DeepPink;"><label for="">Your email-ID</label> <?php echo htmlspecialchars($_SESSION["email"]); ?> </h4>
</div>
</center>

<center>
<div class="wrapper  page-header2">
<h2 style="color:white;">I ❤ TO</h2>
<h4 style="color:white;">Publish</h4>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                <label style="color:white;">Title</label>
                <input type="text" name="title" class="form-control" value="">
                <span class="help-block"><?php echo $title_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($test_err)) ? 'has-error' : ''; ?>">
                <label style="color:white;">TEXT</label>
                    <textarea placeholder="enter within 150 words" style="height: 80px; width: 100%; " name="test"></textarea><br><br>
                <span class="help-block"><?php echo $test_err; ?></span>
            </div>

<input type="submit" class="btn btn-info" name="publish" value="Publish">

</form>
</div>
</center>

<br><br><br><br><br>

<div class="footer">
  <p style=" color:white;">@ Publish UR Tiny Things in UR Tiny World</p>
</div>


</body>
</html>
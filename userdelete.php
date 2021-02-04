<?php
     
     require_once "config.php";

      $id=$_GET['id'];

      $q="DELETE FROM `userdetail` WHERE uid=$id";

      mysqli_query($link,$q);

      header('location: yourview1.php');
  ?>
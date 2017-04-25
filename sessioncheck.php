<?php
 session_start();
 if(isset($_SESSION["userinfo"])){
        if($_SESSION["logintype"]=='owner'){
            header('location:ownerhome.php');
        }
        if($_SESSION["logintype"]=='user'){
             header('location:userhome.php');
        }
    }
  else if(!isset($_SESSION["userinfo"])){
	session_destroy();
	echo"<script>alert('no records found')</script>";
        header("refresh:0; url=index.php");
    }
?>
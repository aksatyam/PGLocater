<?php
 session_start();
 if(!isset($_SESSION["userinfo"])){
        if(!$_SESSION["logintype"]=='owner'){
            header('location:index.php');
        }
    }
?>
<?php
include("connection.php");
session_start();
if(isset($_POST['loginsub'])){
    if(isset($_POST['logintype'])){
       $_SESSION["logintype"]=$_POST['logintype'];
       $tablename;
        switch($_POST['logintype']){
            case 'owner':
            $tablename="pgownermaster";
            break;
            case 'user':
            $tablename="usermaster";
            break;
        }
        if($conn){
            $loginemail=$_POST['loginemail'];
            $loginpassword=$_POST['loginpassword'];
            $query="SELECT fname,lname,email,id FROM $tablename WHERE email='$loginemail' and password='$loginpassword'";
            $result=mysqli_query($conn,$query);
            if($result){
                if(mysqli_num_rows($result)>0){
		            while($row = mysqli_fetch_assoc($result)){
                        $_SESSION["userinfo"]=$row['fname']." ".$row['lname']." ".$row['email']." ".$row['id'];
		            }
	            }
            }
                mysqli_close($conn);
                header('location:login.php');
            }
        }
}
?>
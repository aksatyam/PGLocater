<?php
include('connection.php');
$msg="";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else if($conn){
    if(isset($_POST['ownerregsubmit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['regemail'];
        $mobile=$_POST['regmobile'];
        $password=$_POST['regpassword'];
        $adhar=$_POST['adhar'];
        $pan=strtoupper($_POST['pan']);
        if($fname!=="" && $lname!=="" && $email!=="" && $mobile!=="" && $password!=="" && $adhar!=="" && $pan!==""){
            $available= array("email", "Mobile number", "adhar number","pan number");
            $query[0] = "SELECT email FROM pgownermaster WHERE email= '$email'";
            $query[1] = "SELECT mobile FROM pgownermaster WHERE mobile= '$mobile'";
            $query[2] = "SELECT adhar FROM pgownermaster WHERE adhar= '$adhar'";
            $query[3] = "SELECT pan FROM pgownermaster WHERE pan= '$pan'";
            for($i=0;$i<4;$i++){
                if($query[$i]){
                    $result=mysqli_query($conn,$query[$i]);
                        if (mysqli_num_rows($result) > 0) {
                            mysqli_close($conn);
                            $msg=$available[$i]." all ready exists";
                            echo "<script>"."alert('".$msg."')</script>";
                            header("refresh:0; url=index.php");
                            exit();
                        } 
                }
            }
            $sql="INSERT INTO pgownermaster(fname, lname, email, mobile, password,adhar,pan) VALUES ('$fname','$lname','$email','$mobile','$password','$adhar','$pan')";
            if(mysqli_query($conn,$sql)){
                $msg="registration successfull";
                echo "<script>"."alert('".$msg."')</script>";
                header("refresh:0; url=index.php");
            }
        }
    }
     if(isset($_POST['userregsubmit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['regemail'];
        $mobile=$_POST['regmobile'];
        $password=$_POST['regpassword'];
        if($fname!=="" && $lname!=="" && $email!=="" && $mobile!=="" && $password!==""){
            $available= array("email", "Mobile number", "adhar number","pan number");
            $query[0] = "SELECT email FROM usermaster WHERE email= '$email'";
            $query[1] = "SELECT mobile FROM usermaster WHERE mobile= '$mobile'";
             for($i=0;$i<2;$i++){
                if($query[$i]){
                    $result=mysqli_query($conn,$query[$i]);
                        if (mysqli_num_rows($result) > 0) {
                            mysqli_close($conn);
                            $msg=$available[$i]." all ready exists";
                            echo "<script>"."alert('".$msg."')</script>";
                            header("refresh:0; url=index.php");
                            exit();
                        } 
                }
            }
          $sql1="INSERT INTO usermaster(fname, lname, email, mobile, password) VALUES ('$fname','$lname','$email','$mobile','$password')";
            if(mysqli_query($conn,$sql1)){
                $msg="registration successfull";
                echo "<script>"."alert('".$msg."')</script>";
                header("refresh:0; url=index.php");
            }
        }       
    }
}
?>
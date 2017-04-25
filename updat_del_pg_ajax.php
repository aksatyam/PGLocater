<?php
       /*-------------update part----------------------*/
    if(isset($_REQUEST["update"])){
        $q = json_decode($_REQUEST["update"]);
        $hint="";
        if(!$conn){
		  die("Connection failed: " . mysqli_connect_error());
	   }
        else{
            $query = "SELECT category_name FROM category WHERE category_name = '$q[1]'";
            if (empty($q))
            exit();
            if($query){
                $result=mysqli_query($conn,$query);
			     if (mysqli_num_rows($result) > 0) {
			         mysqli_close($conn);}
                else{
                    $query = "UPDATE category SET category_name = '$q[1]' WHERE category_id='$q[0]'";
                    mysqli_query($conn,$query);
                    $hint="Updation Success";
                } 
            }
        }
        echo $hint === "" ? "No changes made" : $hint;
    }


          /*-------------delete part----------------------*/
	include "dbconnection.php";	                      
    if(isset($_REQUEST["delete"])){
	   $q = json_decode($_REQUEST["delete"]);
	   $query="DELETE FROM category WHERE category_id='$q'";
        mysqli_query($conn,$query);
	   $hint="DELETE.....Success";
	   echo $hint === "" ? "no suggestion" : $hint;
    }
?>
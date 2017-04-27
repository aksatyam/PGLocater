<?php
    include('connection.php');
       /*-------------update part----------------------*/
    if(isset($_REQUEST["update"])){
        $q = json_decode($_REQUEST["update"]);
        $sql = "UPDATE pgadd SET pgname='$q[1]', pgaddress='$q[2]', city='$q[3]', state='$q[4]', pin='$q[5]', contact1='$q[6]', contact2='$q[7]' 
        WHERE pg_id='$q[0]'";
        if (mysqli_query($conn, $sql)) 
        {
            echo "PG Details  Updated Successfully.....";
        }    
    }


          /*-------------delete part----------------------*/	                      
    if(isset($_REQUEST["delete"])){
	   $q = json_decode($_REQUEST["delete"]);
       $sql="SELECT pg_id FROM pg_facility WHERE pg_id='$q'";
       if (mysqli_query($conn, $sql)) 
        {
            $query1="DELETE FROM pg_facility WHERE pg_id='$q'";
            mysqli_query($conn, $query1);
            
            $query2="DELETE FROM pgadd WHERE pg_id='$q'";
            mysqli_query($conn, $query2);
            mysqli_close($conn);
            echo "PG Details Delete Successfully.....";
            
        } 
	   
    }
?>
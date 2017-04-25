<?php
include('connection.php');
/*-------------insert part----------------------*/
if (isset($_REQUEST["insert"])) {
    $q = json_decode($_REQUEST["insert"]);
    if ($q[0] !== "" && $q[1] !== "" && $q[2] !== "" && $q[3] !== "" && $q[4] !== "" && $q[5] !== "" && $q[6] !== "" && $q[7] !== "" && $q[8] !== "" && $q[9] !== "" && $q[10] !== "") 
	{
        $sql1   = "SELECT pg_id,facility_id FROM pg_facility WHERE pg_id='$q[10]'";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) 
		{
            echo "Facility Details Of this PG Is Already Available!";
			exit;
        }
		$sql2 = "INSERT INTO pg_facility(pg_id,cleanliness,water,refrigerator,mess,geyser,parking,laundary,power_backup,security_person,internet)
                           VALUES ('$q[10]','$q[0]','$q[1]','$q[2]','$q[3]','$q[4]','$q[5]','$q[6]','$q[7]','$q[8]','$q[9]')";
    			if (mysqli_query($conn, $sql2)) {
        				echo "PG Facility Added Successfully.....";
    				}
    }
    
    
    
    
}

/*-------------update part----------------------*/
if (isset($_REQUEST["update"])) {
    $q = json_decode($_REQUEST["update"]);
   $sql = "UPDATE pg_facility SET cleanliness='$q[0]', water='$q[1]', refrigerator='$q[2]', mess='$q[3]', geyser='$q[4]', parking='$q[5]', 
	        laundary='$q[6]',power_backup='$q[7]', security_person='$q[8]', internet='$q[9]' WHERE pg_id='$q[10]'";
	if (mysqli_query($conn, $sql)) {
        echo "PG Facility Updated Successfully.....";
    }		
}

?>
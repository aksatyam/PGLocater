<html>
    <head>
    </head>
<body>
<select class='mdb-select'>
<option value='' selected>Choose your PG</option>
<?php
include('connection.php');
include('ownersessioncheck.php');
$query="SELECT pg_id,pgname FROM pgadd";
            $sql=mysqli_query($conn,$query);
			if(mysqli_num_rows($sql) > 0) {
			    while($row = mysqli_fetch_array($sql)) {
				  echo  "<option value='$row[0]'>$row[1]</option>";
                }
			} 
mysqli_close($conn);
?>
</select>
<script>
// Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').material_select();
        });
        }
</script>
</body>
<html>
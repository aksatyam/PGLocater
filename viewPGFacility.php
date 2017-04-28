<html lang="en">
    <head>
        <style>
    fieldset 
	{
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;       
		position: relative;
		border-radius:4px;
		background-color:#f5f5f5;
		padding-left:10px!important;
	}	
	
		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px; 
			width: 35%; 
			border: 1px solid #ddd;
			border-radius: 4px; 
			padding: 5px 5px 5px 10px; 
			background-color: #ffffff;
		}
    </style>
    </head>
<body>
<fieldset class="col">    	
	<legend>VIEW PG FACILITY DETAILS</legend>
			<div class="panel panel-default">
				<div class="panel-body">
        <div class="table-hover">
                <table class="table thead-inverse">
                    <thead>
                        <tr>
                        <th>PG NAME</th>
                        <th>Cleanliness</th>
                        <th>Water</th>
                        <th>Refrigerator</th>
                        <th>Mess</th>
                        <th>Geyser</th>
                        <th>Parking</th>
                        <th>Laundary</th>
                        <th>Power Backup</th>
                        <th>Security Person</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'connection.php';
                            include 'ownersessioncheck.php';
                            $query="SELECT pg_facility.cleanliness, pg_facility.water, pg_facility.refrigerator, pg_facility.mess, pg_facility.geyser, pg_facility.parking, pg_facility.laundary, pg_facility.power_backup, pg_facility.security_person, pgadd.pgname
                            FROM pg_facility
                            LEFT JOIN pgadd ON pg_facility.pg_id = pgadd.pg_id";
                            $sql=mysqli_query($conn,$query);
                                if(mysqli_num_rows($sql) > 0) {
                                    while($row = mysqli_fetch_array($sql)) {
                                    echo  "<tr><td>".$row[9].
                                            "</td><td>".$row[0].
                                            "</td><td>".$row[1].
                                            "</td><td>".$row[2].
                                            "</td><td>".$row[3].
                                            "</td><td>".$row[4].
                                            "</td><td>".$row[5].
                                            "</td><td>".$row[6].
                                            "</td><td>".$row[7].
                                            "</td><td>".$row[8].
                                            "</td><tr>";
                                        
                                    }
                                }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</fieldset>	
</body>
</html>



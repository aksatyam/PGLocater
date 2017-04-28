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
<!--Body-->
<fieldset class="col">    	
	<legend>VIEW PG DETAILS</legend>
			<div class="panel panel-default">
				<div class="panel-body">
        <div class="table-hover">
            <table class="table thead-inverse">
                <thead>
                    <tr>
                    <th col width="15">PID</th>
                    <th>PG NAME</th>
                    <th>ADDDRESS</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pin</th>
                    <th>Contact No1</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connection.php';
                    include 'ownersessioncheck.php';
                    $query="SELECT pg_id,pgname,pgaddress,city,state,pin,contact1 FROM pgadd";
                    $sql=mysqli_query($conn,$query);
                                if(mysqli_num_rows($sql) > 0) {
                                    while($row = mysqli_fetch_array($sql)) {
                                    echo  "<tr>";
                                        for($i=0;$i<7;$i++)
                                            echo "<td>".$row[$i]."</td>";
                                            echo "</tr>";
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



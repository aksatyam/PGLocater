<html lang="en">
    <head>
    
    </head>
<body>
    <!--Form with header-->
<div class="card">
    <div class="card-block">
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-list"></i> PG DETAILS LIST</h3>
        </div>

        <!--Body-->
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
<!--/Form with header-->
</body>
</html>



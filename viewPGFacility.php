<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    </head>
<body>
<!--Form with header-->
<div class="card">
    <div class="card-block">
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-list"></i> PG FACILTY LIST</h3>
        </div>

        <!--Body-->
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

<!--/Form with header-->
</body>
</html>



<?php
include 'connection.php';
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "testing");
$output  = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query  = "
  SELECT pg_id,pgname,pgaddress,city,state,pin,contact1 FROM pgadd 
  WHERE pgname LIKE '%" . $search . "%'
  OR pgaddress LIKE '%" . $search . "%' 
  OR city LIKE '%" . $search . "%' 
  OR state LIKE '%" . $search . "%' 
  OR pin LIKE '%" . $search . "%'
  OR contact1 LIKE '%" . $search . "%'
 ";
} else {
    $query = "
  SELECT pg_id,pgname,pgaddress,city,state,pin,contact1 FROM pgadd ORDER BY pg_id
 ";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>PG Name</th>
     <th>Address</th>
     <th>City</th>
     <th>State Code</th>
     <th>Pin</th>
     <th>Contact No</th>
    </tr>
 ';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
   <tr>
    <td>' . $row["pgname"] . '</td>
    <td>' . $row["pgaddress"] . '</td>
    <td>' . $row["city"] . '</td>
    <td>' . $row["state"] . '</td>
    <td>' . $row["pin"] . '</td>
    <td>' . $row["contact1"] . '</td>
   </tr>
  ';
    }
    echo $output;
} else {
    echo 'Data Not Found';
}

?>
<html lang="en">
    <head>
    </head>
<body>
<div class="container">
        <div class="card">
            <div class="card-block">
                <!--Header-->
                <div class="form-header blue-gradient">
                    <h3><i class="fa fa-list"></i> PG FACILTY ADD</h3>
                </div><br>

        <!--PG LIST POPULATE START-->
        <div class="row">
            <div class="col-7">
                <!--Blue select-->
                <select id="pgList" class="mdb-select colorful-select dropdown-success" onchange="viewForm()">
                    <option value="" selected>Select PG To Add Facility</option>
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
                <!--/Blue select-->
            </div>
        </div><br>
        <!--PG LIST POPULATE END-->

        <!--ADD PG FACILITY FORM START-->
        <div id="facilityAdd" style="display:none;">
        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Cleanness</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Water-Puifier</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div></br>

        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Refrigerator</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Mess / Canteen</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div></br>

        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Geyser</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Parking-Area</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div></br>

        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Laundary</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Power Backup</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div></br>

        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">Security Person</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">WiFi / Internet</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div></br>
        <button class="btn btn-success btn-rounded" value="Save" name="facilityadd">Save</button>
        <button class="btn btn-warning btn-rounded" value="clear">Clear</button>
        </div>
        <!--ADD PG FACILITY FORM END-->
    </div>
  </div><br>
</div>
<script>
    // Material Select Initialization
 $(document).ready(function() {
    $('.mdb-select').material_select();
  });
  function viewForm(){
      if(pgList.selectedIndex>0){
          facilityAdd.style.display="block";
      }
      else{
          facilityAdd.style.display="none";
      }
    }
    $(document).ready(function() {
        $('#facilityAdd :button:eq(0)').click(function(){
            var arr=new Array();
            div_child=$('#facilityAdd select');
            div_child.each(function(){
                if($(this).prop('selectedIndex')==0){
                    alert($(this).parent().parent().prev().text()+" field is blank,select yes or no");
                    exit;
                }
                else{
                    arr.push($(this).find('option:selected').text());
                }
            });
            arr.push($('select:first').val());
            var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
				        alert(this.responseText);
				 }
			};
			xmlhttp.open("GET", "pgfacility_ajax.php?insert=" +JSON.stringify(arr), true);
			xmlhttp.send();
        });
         $('#facilityAdd :button:eq(1)').click(function(){
            div_child=$('#facilityAdd select');
            div_child.each(function(){
                $(this).prop("selectedIndex", 0);
            });
         });
    });
</script>
</body>
</html>


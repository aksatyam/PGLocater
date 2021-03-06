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
                    width: 100%; 
                    text-align: center; 
                    border: 1px solid #ddd;
                    border-radius: 4px; 
                    padding: 5px 5px 5px 10px; 
                    background-color: #ffffff;
                }
    </style>
    </head>
<body>
<div class="container">
  <fieldset class="col">    	
	<legend>ADD PG ROOM FACILITY DETAILS</legend>
			<div class="panel panel-default">
				<div class="panel-body" style="padding:10px">

        <!--PG LIST POPULATE START-->
        <div class="row">
            <div class="col-7">
                <!--Blue select-->
                <select id="pgList" class="mdb-select colorful-select dropdown-success" onchange="viewForm()">
                    <option value="" selected>Select PG ROOM To Add Facility</option>
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
               <label for="form1" class="btn btn-primary">CAPACITY</label>
            </div>
            <div class="col-3">
                <div class="md-form">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">No of Members</label>
                </div>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">AVAILABLE FOR</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="1">Boys</option>
                    <option value="2">Girls</option>
                    <option value="3">Couples</option>
                    <option value="4">Family</option>
                </select>
            </div>
        </div></br>

        <div class="md-form row">
            <div class="col-3">
               <label for="form1" class="btn btn-primary">TV</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">COOLER</label>
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
               <label for="form1" class="btn btn-primary">AC</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">ALMERAH</label>
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
               <label for="form1" class="btn btn-primary">FURNITURE</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
            <div class="col-3">
               <label for="form1" class="btn btn-primary">AVAILABILITY</label>
            </div>
            <div class="col-3">
                <select class="mdb-select colorful-select dropdown-success">
                    <option vlaue="" selected>Select Option</option>
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
            </div>
        </div><br><br>
        <div class="md-form row">
            <div class="col">
                <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                        <span>Choose file</span>
                        <input type="file" name="photo1">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="PG Room Image Upload">
                    </div>
                </div>
            </div>
        </div></br>
        <button class="btn btn-success btn-rounded" value="Save" name="facilityadd">Save</button>
        </div>
        <!--ADD PG FACILITY FORM END-->
        </div>
    </div><br>
  </fieldset>
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



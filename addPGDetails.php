<html lang="en">
    <head>

<?php 
include('connection.php');
include('ownersessioncheck.php');

function test_input($data) {
  if (empty($data)) {
      echo"<script>alert('".$data." field cannot be blank')</script>";
    exit();
  }
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['addpgsub'])){
     $target_dir = "uploads/";
    $desti=array();
    $i=1;
    for($i=1;$i<=3;$i++){
        $target_file = $target_dir . basename($_FILES["photo".$i]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["photo".$i]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file in file upload ".$i." is too large.')</script>";
            exit();
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file in file upload ".$i." was not uploaded.')</script>";
            exit();
        } else {
            $targetname=$target_dir . basename($_FILES["photo".$i]["name"],$imageFileType);
            $desti[$i]=$target_dir .strrev(mt_rand(1000000000,time())).strrev(mt_rand(1000000000,time())).".".$imageFileType;
            if (move_uploaded_file($_FILES["photo".$i]["tmp_name"],$desti[$i])) {
                // echo "The file ". basename( $_FILES["photo".$i]["name"]). " has been uploaded.";
             } else {
                    echo "<script>alert('Sorry, there was an error uploading your file in file upload.".$i."')</script>";
            }
        }
    } 


        $omitid= explode(" ",$_SESSION["userinfo"]);
        $ownerid=$omitid[3].
        $pgname=test_input($_POST['pgname']);
        $pgaddress=test_input($_POST['pgaddress']);
        $city=test_input($_POST['city']);
        $state=test_input($_POST['state']);
        $pin=test_input($_POST['pin']);
        $contact1=test_input($_POST['contact1']);
        $contact2=test_input($_POST['contact2']);
         $suitable=test_input($_POST['suitable']);
        
       if($conn){
          $sql="INSERT INTO pgadd (id,pgname,pgaddress,city,state,pin,contact1,contact2,suitable,photo1,photo2,photo3) 
           VALUES ('$ownerid','$pgname','$pgaddress','$city','$state','$pin','$contact1','$contact2','$suitable','$desti[1]','$desti[2]','$desti[3]')";
           if(mysqli_query($conn,$sql)){
              echo "<script>alert('data inserted successfully')</script>";
               header("refresh:0; url=ownerhome.php");
           }
        }
        else{

        }
}
?>
    </head>
<body>
    <!--Form with header-->
<div class="row-6">
<div class="card">
    <div class="card-block">
        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-address-card-o" aria-hidden="true"></i> ADD PG DETAILS</h3>
        </div>
        
    <div class="col-sm-10">
        <!--Body-->
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <div class="md-form form-group">
                <i class="fa fa-home prefix"></i>
                <input type="text" class="form-control" name="pgname">
                <label for="form9" data-error="wrong" data-success="right">PG Name</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-address-book prefix"></i>
                <input type="text"  class="form-control" name="pgaddress">
                <label  data-error="wrong" data-success="right">PG Addrerss</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-location-arrow prefix"></i>
                <input type="text"  class="form-control" name="city">
                <label  data-error="wrong" data-success="right">City</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-area-chart prefix"></i>
                <input type="text"  class="form-control" name="state">
                <label  data-error="wrong" data-success="right">State</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-area-chart prefix"></i>
                <input type="tel" class="form-control" name="pin">
                <label  data-error="wrong" data-success="right">PIN</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-mobile-phone prefix"></i>
                <input type="tel"  class="form-control" name="contact1">
                <label data-error="wrong" data-success="right">Contact No 1</label>
            </div>

            <div class="md-form form-group">
                <i class="fa fa-mobile-phone prefix"></i>
                <input type="tel" class="form-control" name="contact2">
                <label  data-error="wrong" data-success="right">Contact No 2</label>
            </div>

            <div class="form-group">
                <i class="fa fa-female prefix"></i>
                <label  data-error="wrong" data-success="right">Suitable For</label>
                <select  class="form-control" name="suitable">
                    <option value="" selected disabled>Select suitable for</option>
                    <option value="Boys">Boys</option>
                    <option value="girls">Girls</option>
                    <option value="combine">Combine</option>
                    <option value="family">Family</option>
                    </select>
                
            </div>

            <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                        <span>Choose file</span>
                        <input type="file" name="photo1">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="PG Image1 Upload">
                    </div>
            </div>
            <br><br>
            <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                        <span>Choose file</span>
                        <input type="file" name="photo2">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="PG Image2 Upload">
                    </div>
            </div>
            <br><br>
            <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                        <span>Choose file</span>
                        <input type="file" name="photo3">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="PG Image3 Upload">
                    </div>
            </div>

            <br><br>
            <div class="md-form form-group">
                <button class="btn btn-success btn-lg btn-rounded" type="submit" name="addpgsub"><i class="fa  fa-save left"></i> SAVE</button>
                <button class="btn btn-danger btn-lg btn-rounded" type="reset"><i class="fa fa-calendar-times-o left"></i> CLEAR</button>
            </div>
       </form>
    </div>
    </div>
</div>
</div>
<!--/Form with header-->
</body>
<script>
     $(document).ready(function(){
        var addpgdetailsform=$('form:eq(0)');
        addpgdetailsform.find(':input:lt(7)').prop('required',true);
        addpgdetailsform.find(':input:file').prop('required',true);
        addpgdetailsform.find(':input').attr('onpaste','return false');
        //addpgdetailsform.children().find(':text').not(':eq(1)').attr({pattern:'[A-Za-z]{3,}',title:'at least three or more characters',maxlength:30});
        addpgdetailsform.children().find(':text').css('text-transform','capitalize');
        addpgdetailsform.find(':input[type="tel"]:eq(0)').attr({maxlength:6,pattern:'[0-9]{6}',title:'6 digits pin number'});
        addpgdetailsform.find(':input[type="tel"]:gt(0)').attr({maxlength:10,pattern:'[0-9]{10}',title:'10 digits contact number'}); 

        addpgdetailsform.find(':text').not(':eq(1)').keydown(function(e){
            if ((e.which >=65 && e.which<=90)||(e.which >=97 && e.which<=122))
            return;
            switch(e.which){
                case 8:case 37:case 39:case 09:return;
            }
                e.preventDefault();
            });
        addpgdetailsform.find(':input[type="tel"]').keypress(function(e){
            if((e.which>=48) && (e.which<=57)){
                 return;
            }
           
            switch(e.which){
                case 8:case 37:case 39:case 09:return;
            }
            e.preventDefault();
        });  
     });
    </script>
</html>

<?php
$conn=mysqli_connect("localhost","root","","stu_info");
if(isset($_POST["save"])) {
    $target_dir = "uploads/";
    $desti=array();
    $i=1;
    $photo=array();
    for($i=1;$i<=3;$i++){
        $target_file = $target_dir . basename($_FILES["photo".$i]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["photo".$i]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "<script>alert('File in file upload ".$i." is not an image.')</script>";
            header("refresh:0; url=index.html");
            exit();
            $uploadOk = 0;
        }
        if ($_FILES["photo".$i]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file in file upload ".$i." is too large.')</script>";
            header("refresh:0; url=index.html");
            exit();
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
            exit();
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file in file upload ".$i." was not uploaded.')</script>";
            header("refresh:0; url=index.html");
            exit();
        } else {
            $targetname=$target_dir . basename($_FILES["photo".$i]["name"],$imageFileType);
            $desti[$i]=substr($targetname,0,strlen($targetname)-1)."".strrev(mt_rand(1000000000,time())).".".$imageFileType;
            if (move_uploaded_file($_FILES["photo".$i]["tmp_name"],$desti[$i])) {
                 echo "The file ". basename( $_FILES["photo".$i]["name"]). " has been uploaded.";
             } else {
                    echo "<script>alert('Sorry, there was an error uploading your file in file upload.".$i."')</script>";
            }
        }
    }  

        $stu_name=$_POST['stu_name'];
	    $stu_reg=$_POST['stu_reg'];
	    $sql = "INSERT INTO reg (firstname, regno,photo1,photo2,photo3)VALUES ('$stu_name', '$stu_reg','$desti[1]','$desti[2]','$desti[3]')";
	    mysqli_query($conn,$sql);
}
?>
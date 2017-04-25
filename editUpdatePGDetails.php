<html lang="en">
    <head>
     <script>
        $(document).ready(function(){
			var list_form= $('#list form');
            list_form.find(':input').attr('readonly','true');
            list_form.find(':button:eq(1)').attr('disabled','disabled');
			list_form.find(':input[type="tel"]:gt(0)').attr({maxlength:10});
			$('#list form').find(':input[type="tel"]:eq(0)').attr({maxlength:6});
            $('#list form button').click(function(){    
                var index=$(this).parent().children().index(this);
                var child_text=$(this).parent().children(':input').not(':button');
                $('#list form :text').not(this).attr("readonly","true");
                $('#list form :input[type="tel"]').not(this).attr("readonly","true");
                $('#list form :nth-child(10)').not(this).attr("disabled","disabled");
                if(index==8){
                    $(this).parent().children(':text').removeAttr('readonly');
                    $(this).parent().children(':input[type="tel"]').removeAttr('readonly');
                    $(this).next().removeAttr('disabled');
                }

                else if(index==9){
                    var arr=new Array();
                    var conf=confirm("Are You Sure Want To Save Record...");
                    if(conf){
                         child_text.each(function(){
                            var cat_updat_val=$.trim($(this).val());
				            if(cat_updat_val.length==0){
                                alert('Field cannot be blank');
				                $(this).removeAttr("readonly","false");
				                $(this).focus();
				                exit();
				            }
				            else{
				                arr.push(cat_updat_val);
				            }
                        });
                        list_form.find(':button:eq(1)').attr('disabled','disabled');
				        var xmlhttp = new XMLHttpRequest();
				        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
				                alert(this.responseText);
				            }
				        };
				        xmlhttp.open("GET", "updat_del_pg_ajax.php?update=" +JSON.stringify(arr), true);
				        xmlhttp.send();
				    }
                }

                else if(index==10){
				    var conf=confirm("Are You Sure Want To Delete Record...")
				    if(conf){
				        var del_id=$.trim($(this).parent().children(':first-child').val());
				        var xmlhttp = new XMLHttpRequest();
				        xmlhttp.onreadystatechange = function() {
				            if (this.readyState == 4 && this.status == 200) {
				                alert(this.responseText);
				            }
				        };
				        xmlhttp.open("GET", "updat_del_pg_ajax.php?delete=" +JSON.stringify(del_id), true);
				        xmlhttp.send();
				        $(this).parent().remove();
				    }
				}
        });
		 	list_form.find(':input[type="tel"]').keypress(function(e){
            	if((e.which>=48) && (e.which<=57)){
                 	return;
            	}
            	switch(e.which){
                	case 8:case 37:case 39:case 09:return;
            	}
            	e.preventDefault();
        	});
			list_form.find(':text').not(':eq(1)').keypress(function(e){    
                if((e.which >=65 && e.which<=90)||(e.which >=97 && e.which<=122)){
                    return;
                }
                switch(e.which){
                    case 8:case 37:case 39:case 09:return;
                }
                e.preventDefault();
        	});

			list_form.find(':text:eq(1)').keypress(function(e){    
                if((e.which >=65 && e.which<=90)||(e.which >=97 && e.which<=122)){
                    return;
                }
                switch(e.which){
                    case 8:case 37:case 39:case 09:return;
                }
                e.preventDefault();
        	});
});
    </script>
    </head>
<body>
	<div id='list'>				
		<?php
			include 'connection.php';
            include 'ownersessioncheck.php';
            $query="SELECT pg_id,pgname,pgaddress,city,state,pin,contact1,contact2 FROM pgadd";
            $sql=mysqli_query($conn,$query);
			if(mysqli_num_rows($sql) > 0) {
			    while($row = mysqli_fetch_array($sql)) {
				    echo "<form class='form-inline'>
				    <input type='hidden' class='form-control' value='".$row[0]."'>
				    <input type='text' class='form-control' value='".$row[1]."'size='10'>
				    <input type='text' class='form-control' value='".$row[2]."'size='20'>
				    <input type='text' class='form-control' value='".$row[3]."'size='5'>
                    <input type='text' class='form-control' value='".$row[4]."'size='5'>
                    <input type='tel' class='form-control' value='".$row[5]."'size='6'>
                    <input type='tel' class='form-control' value='".$row[6]."'size='10'>
                    <input type='tel' class='form-control' value='".$row[7]."'size='10'>
                    <button type='button' class='btn btn-info btn-md'>EDIT</button>
                    <button type='button' class='btn btn-primary btn-md'>Update</button>
                    <button type='button' class='btn btn-danger btn-md'>DELETE</button>";
                    echo "</form>";
                }
			} 
			mysqli_close($conn);
		?>
	</div>
</body>
</html>
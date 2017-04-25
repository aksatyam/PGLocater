    $(document).ready(function(){
    $('form').find(':input').prop('required',true);
     var ownerregform=$('#ownerregform');
     var userregform=$('#userregform');
      $('form').children().find(':text').attr({pattern:'[A-Za-z]{3,}',title:'at least three or more characters',maxlength:20});
      $('form').children().find(':text').css('text-transform','capitalize');
      $('form:gt(0)').children().find(':password').attr({pattern:'[A-Za-z0-9]{6,}',title:'at least six or more characters or numbers and special characters',maxlength:20});
      $('form:gt(0)').children().find(':input[type="tel"]:first').attr({maxlength:10,pattern:'[0-9]{10}',title:'10 digits mobile number'});
      ownerregform.find(':input[type="tel"]:eq(1)').attr({maxlength:16,pattern:'[0-9]{16}',title:'16 digits number'}); 
      ownerregform.find(':input[type="tel"]:last').attr({maxlength:10,pattern:'[0-9A-Za-z]{10}',title:'combination of total 10 characters and digits'});
      
       ownerregform.find(':text').keydown(function(e){
            if ((e.which >=65 && e.which<=90)||(e.which >=97 && e.which<=122))
            return;
            switch(e.which){
                case 8:case 37:case 39:case 09:return;
            }
                e.preventDefault();
            });
            $('form').find(':input').attr('onpaste','return false');
        userregform.find(':input[type="tel"]').keypress(function(e){
            if((e.which>=48) && (e.which<=57)){
                 return;
            }
           
            switch(e.which){
                case 8:case 37:case 39:case 09:return;
            }
            e.preventDefault();
        });
        ownerregform.find(':input[type="tel"]').not(':input[type="tel"]:last').keypress(function(e){
            if((e.which>=48) && (e.which<=57)){
                 return;
            }
           
            switch(e.which){
                case 8:case 37:case 39:case 09:return;
            }
            e.preventDefault();
        });
        ownerregform.find(':input[type="tel"]:last').on({
              keypress:function(e){     
                    if((e.which>=48) && (e.which<=57)||(e.which >=65 && e.which<=90)||(e.which >=97 && e.which<=122)){
                        return;
                    }
                    switch(e.which){
                        case 8:case 37:case 39:case 09:return;
                    }
                    e.preventDefault();
            },
            keyup:function(){
                $(this).val(($(this).val()).toUpperCase());
            }
        });
    });

    var ownerpass = document.getElementById("ownerregpassword");
    var ownerconfpass = document.getElementById("ownerregconfpassword");

    function validatePassword(){
        if(ownerpass.value != ownerconfpass.value) {
        ownerconfpass.setCustomValidity("Password not Matched");
        } else {
        ownerconfpass.setCustomValidity('');
        }
    }
    ownerpass.onchange =validatePassword;
    ownerconfpass.onkeyup =validatePassword;

   var userpass = document.getElementById("userregpassword");
    var userconfpass = document.getElementById("userregconfpassword");

    function validatePassword2(){
        if(userpass.value != userconfpass.value) {
        userconfpass.setCustomValidity("Password not Matched");
        } else {
        userconfpass.setCustomValidity('');
        }
    }
    userpass.onchange =validatePassword2;
    userconfpass.onkeyup =validatePassword2;

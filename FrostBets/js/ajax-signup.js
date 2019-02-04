$("#btn_end_registration").click(function(){
            var inLog = $("#login_registration").val();
            var inPass = $("#password_registration").val();
            var inPass2 = $("#repeatpassword_registration").val();
            var inEmail = $("#email_registration").val();
            var checkBox = $("#check_read_agreement").is(':checked');
            
            var emailValid;
            if($("#email_registration").val().indexOf('@')> -1 && $("#email_registration").val().indexOf('.')> -1)
                emailValid = true;
            else
                emailValid = false;
            
             console.log(inLog); console.log(inEmail); console.log(inPass); console.log(inPass2); console.log(checkBox); console.log(emailValid);
            
            $.trim(inLog); $.trim(inPass); $.trim(inEmail);
            if(inLog !="" && inPass != "" && inEmail != "" && checkBox && inPass == inPass2 && inLog.length >= 4 && emailValid){
                console.log("go sign")
                $.ajax({
                    url: "./php_scripts/action_signup.php",
                    type: "POST",
                    data: {login: inLog, password: inPass, email: inEmail},
                    success: function(data){  
                        if(data == 1){
                            // проблема с логином 
                            $('#error_login_php').removeClass('display_none');
                            $('#success_reg').addClass('display_none');
                            $('#error_email_php').addClass('display_none');
                        }

                        if(data == 2){
                              // проблема с емайлом 
                            $('#error_email_php').removeClass('display_none');
                            $('#error_login_php').addClass('display_none');
                            $('#success_reg').addClass('display_none');

                        }

                        if(data == 0){ 
                            // регистрируем 
                            $('#success_reg').removeClass('display_none');
                            $('#error_login_php').addClass('display_none');                        
                            $('#error_email_php').addClass('display_none');
                        }

                    }

                })
            }
        })
$("#btn_login").click(function(){
            var inLog = $("#login_log_in").val();
            var inPass = $("#password_log_in").val();
            
            
            $.trim(inLog); $.trim(inPass);
            
            $.ajax({
                url: "./php_scripts/action_login.php",
                type: "POST",
                data: {login: inLog, password: inPass},
                success: function(data){  
                    if(data == 1){
                        // проблема с логином 
                        $('#login_not_found').removeClass('display_none');
                        $('#incorrect_password').addClass('display_none');
                       
                    }

                    if(data == 2){
                          // проблема с паролем 
                        $('#incorrect_password').removeClass('display_none');
                        $('#login_not_found').addClass('display_none');
                        

                    }

                    if(data == 0){ 
                        //Какая-нибудь красота всплывет
                        
                        setTimeout('location.reload()', 1300);                        
                    }

                }

            })
});
        
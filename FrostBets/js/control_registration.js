$.validator.addMethod("alphanumeric", function(value, element) {
	var regexp = /^[a-zA-Z\d_]+$/i;
	return this.optional( element ) || regexp.test(value);},
	"You can use only a-z A-Z 0-9 and _")
$(document).ready(function(){
	$('#form_registration').validate({
		rules:{
			login_registration: {
				required: true,
				alphanumeric: true,
				minlength: 4,
				maxlength: 16,
				
			},
			email_registration:{
				required: true,
				email: true,
				
			},
			password_registration:{
				required: true,
				minlength: 6,
				maxlength: 24
			},
			repeatpassword_registration:{
				required: true,
				equalTo: "#password_registration" 
			},
			check_read_agreement:{
				required: true
			}
			
		},
		messages:{
			login_registration:{
				required:"Это поле обязательно для заполнения!",
				minlength:"Длина должна быть не менее 4-х символов!",
				maxlength: "Длина долна быть не более 16-ти символов",
				alphanumeric: 'Логин может состоять только из букв латинского алфавита, цифр и знака "_"'
			},
			email_registration:{
				required:"Это поле обязательно для заполнения!",
				email:"Неверный формат Email (Example@example.ru)"
			},
			password_registration:{
				required:"Это поле обязательно для заполнения!",
				minlength:"Длина пароля должна быть не менее 6-ти символов!",
				maxlength: "Длина долна быть не более 24-ти символов"
			},
			repeatpassword_registration:{
				required:"Это поле обязательно для заполнения!",
				equalTo:"Пароли должны совпадать!"
			},
			check_read_agreement:{
				required: "Это поле обязательно для заполнения!"
			}
		}
		//invalid_i
	});
});
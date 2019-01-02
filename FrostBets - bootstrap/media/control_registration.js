$(document).ready(function(){

	var regexppas = new RegExp("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[^\w\s]).{6,}/"); 

	$.validator.addMethod('password', function(value, element){
		return !(regexppas.test(value));
	});

	$.validator.addMethod('truepassword',function(value, element){
		var pas, reppas = value;
		pas = $('#password_registration').val();
		if(pas == reppas)
			return true;
		else 
			return false;
	});

	$('#form_registration').validate({
		rules: {
			login_registration: {
				required: true,
				minlength: 4
			},
			email_registration: {
				required: true
			},
			password_registration: {
				required: true,
				minlength: 6,
				password: true
			},
			repeatpassword_registration: {
				required: true,
				truepassword: true
			}
		},
		messages: {
			login_registration: {
				required: "Это поле обязательно для заполнения",
				minlength: "Для логина должна быть неменьше 4 символов"
			},
			email_registration: {
				required: "Это поле обязательно для заполнения"
			},
			password_registration: {
				required: "Это поле обязательно для заполнения",
				minlength: "Длина пароля должна быть неменее 6 символов",
				password: "Не правильный вид пароля (пароль не должен содержать спец. символов, должен содержать цифры и состоять только из английских букв)"
			},
			repeatpassword_registration: {
				required: "Это поле обязательно для заполнения",
				truepassword: "Пароли должны совпадать"
			}
		}
	});
});
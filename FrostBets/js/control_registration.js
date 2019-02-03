$(document).ready(function(){
	$('#form_registration').validate({
		rules:{
			login_registration: {
				required: true,
				minlength: 4
			},
			email_registration:{
				required: true,
				email: true
			},
			password_registration:{
				required: true,
				minlength: 6
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
				minlength:"Длина логина должна быть не менее 4-х символов!"
			},
			email_registration:{
				required:"Это поле обязательно для заполнения!",
				email:"Неверный формат Email (Example@example.ru)"
			},
			password_registration:{
				required:"Это поле обязательно для заполнения!",
				minlength:"Длина пароля должна быть не менее 6-ти символов!"
			},
			repeatpassword_registration:{
				required:"Это поле обязательно для заполнения!",
				equalTo:"Пароли должны совпадать!"
			},
			check_read_agreement:{
				required: "Это поле обязательно для заполнения!"
			}
		}
	});
});
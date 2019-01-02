$(document).ready(function(){
	$('#contact_form').validate({
		rules:{
			email_contact:{
				required: true,
				email: true
			},
			other_topic:{
				required: true
			},
			i_read_faq:{
				required: true
			}
		},
		messages:{
			email_contact:{
				required:"Это поле обязательно для заполнения!",
				email:"Неверный формат Email (Example@example.ru)"
			},
			other_topic:{
				required:"Это поле обязательно для заполнения!"
			},
			i_read_faq:{
				required:"Это поле обязательно для заполнения!"
			}
		}
	});
});
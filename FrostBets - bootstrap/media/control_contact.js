$(document).ready(function(){
	$('#contact_form').validate({
		rules: {
			email_contact: {
				required: true
			},
			other_topic: {
				required: true
			},
			i_read_faq: {
				required: true
			}
		},
		messages: {
			email_contact: {
				required: "Это поле обязательно для ввода"
			},
			other_topic: {
				required: "Это поле обязательно для ввода"
			},
			i_read_faq: {
				required: "Это поле обязательно для ввода"
			}
		}
	});
});
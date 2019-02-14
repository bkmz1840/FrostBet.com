$(document).ready(function(){
	var width = 0, option = '', scroll = 0, choose_game = true, choose_game_index = true, em = 1.0;
	$('#tab_2').removeClass('finished_matches').addClass('tab_off');
	width = $(window).width();
		if (width <= 974) {
			$('.elems_in_header').css({'border-right':'none', 'margin-top':'10px'});
			$('#support').css({'border-right':'none'});
			$('#head').css({'height': 'auto'});
		} else {
			$('.elems_in_header').css({'border-right':'1px solid #7A94A9', 'margin-top':'20px'});
			$('#support').css({'border-right':'1px solid #7A94A9'});
			$('#head').css({'height': '70px'});
		}
		if (width <= 558) {
			$('#fargot_password').css({'position':'static'});
			$('#choose_game_index').css({'top':'123px', 'right':'-60px'});
			$('#games_index').css({'margin-left':'50px'});
		} else {
			$('#fargot_password').css({'position':'relative'});
			$('#choose_game_index').css({'top':'13px', 'right':'0'});
			$('#games_index').css({'margin-left':'185px'});
		}
	scroll = $(window).scrollTop();
		if(scroll != 0) {
			$('#pre_header').css({'display':'none'});
			$('#head').css({'top':'0'});
		}
		else {
			$('#pre_header').css({'display':'block'});
			$('#head').css({'top':'30px'});
		}
	$('#topic_of_problem').on('change', function(){
		option = $(this).val();
		if (option == 'Другое')
			$('#div_other_topic').css({'display': 'block'});
		else
			$('#div_other_topic').css({'display': 'none'});
	});

	$(window).resize(function() {
		width = $(window).width();
		if (width <= 974) {
			$('.elems_in_header').css({'border-right':'none','margin-top':'10px'});
			$('#support').css({'border-right':'none'});
			$('#head').css({'height': 'auto'});
		} else {
			$('.elems_in_header').css({'border-right':'1px solid #7A94A9','margin-top':'20px'});
			$('#support').css({'border-right':'1px solid #7A94A9'});
			$('#head').css({'height': '70px'});
		}
		if (width <= 558) {
			$('#fargot_password').css({'position':'static'});
			$('#choose_game_index').css({'top':'123px', 'right':'-60px'});
			$('#games_index').css({'margin-left':'50px'});
		} else {
			$('#fargot_password').css({'position':'relative'});
			$('#choose_game_index').css({'top':'13px', 'right':'0'});
			$('#games_index').css({'margin-left':'185px'});
		}
	});

	$(window).scroll(function() {
		scroll = $(window).scrollTop();
		if(scroll != 0) {
			$('#pre_header').css({'display':'none'});
			$('#head').css({'top':'0'});
		}
		else {
			$('#pre_header').css({'display':'block'});
			$('#head').css({'top':'30px'});
		}
	});

	$('#btn_choose_game').click(function(){
		if (choose_game) {
			choose_game = false;
			if (width >= 992) {
				$('.elems_in_header').animate({'margin-top':'60px'}, 300);
				$('#balance_and_other').animate({'top':'50px'}, 300);
			}
			$('#games').slideDown(300);
			$('#games').css({'display':'flex'});
		}
		else {
			choose_game = true;
			if (width >= 992) {
				$('.elems_in_header').animate({'margin-top':'20px'}, 300);
				$('#balance_and_other').animate({'top':'10px'}, 300);
			}
			$('#games').slideUp(300);
		}
		$(window).click(function(){
			if (!choose_game) {
				choose_game = true;
				if (width >= 992) {
					$('.elems_in_header').animate({'margin-top':'20px'}, 300);
					$('#balance_and_other').animate({'top':'10px'}, 300);
				}
				$('#games').slideUp(300);
			}
		});
	});

	if(width <= 974) {
		$('#choose_game_index').css({'top':'63px'});
	}  else {
		$('#choose_game_index').css({'top':'13px'});
	}
	if(width <= 558) {
		$('#choose_game_index').css({'top':'79px'});
	}
	if(width <= 316) {
		$('#choose_game_index').css({'top':'123px'});
	}

	$(window).resize(function(){
		width = $(window).width();
		if(width <= 974) {
			$('#choose_game_index').css({'top':'63px'});
		} else {
			$('#choose_game_index').css({'top':'13px'});
		}
		if(width <= 558) {
			$('#choose_game_index').css({'top':'79px'});
		}
		if(width <= 316) {
			$('#choose_game_index').css({'top':'123px'});
		}
	});


	$('#btn_choose_game_index').click(function(){
		if(choose_game_index) {
			choose_game_index = false;
			if (width > 974) {
				$('#form_login').animate({'top':'55px'}, 300);
				$('#choose_game_index').animate({'top':'54px'}, 300);
			} else if (width <= 974 && width > 316) {
				$('#btn_login').animate({'top':'-40px'}, 300);
				$('#btn_registration').animate({'top':'-82px'}, 300);
			} else if (width <= 316) {
				$('#btn_login').animate({'top':'-80px'}, 300);
				$('#btn_registration').animate({'top':'-82px'}, 300);
			}
			$('#games_index').slideDown(300);
			$('#games_index').css({'display':'flex'});
		}
		else {
			choose_game_index = true;
			if (width > 974) {
				$('#form_login').animate({'top':'14px'}, 300);
				$('#choose_game_index').animate({'top':'13px'}, 300);
			} else {
				$('#btn_login').animate({'top':'0'}, 300);
				$('#btn_registration').animate({'top':'0'}, 300);
			}
			$('#games_index').slideUp(300);
		}
	});
	$('#tab_1').click(function(){
		$('#tab_1').removeClass('tab_off').addClass('upcoming_matches');
		$('#tab_2').removeClass('finished_matches').addClass('tab_off');
		$('#tables_of_upcoming_matches').css({'display':'grid'});
		$('#tables_of_finished_matches').css({'display':'none'});
	});
	$('#tab_2').click(function(){
		$('#tab_1').removeClass('upcoming_matches').addClass('tab_off');
		$('#tab_2').removeClass('tab_off').addClass('finished_matches');
		$('#tables_of_upcoming_matches').css({'display':'none'});
		$('#tables_of_finished_matches').css({'display':'grid'});
	});
});

$(document).ready(function(){
	var l_team = false, r_team = false, sum_of_bet = 0, coef;
	$('#coef_l_team a').html($('.l_coef').html());
	$('#coef_r_team a').html($('.r_coef').html());
	$('#modal_tournament_name').html($('#tournament_name').html());

	$('.l_coef').click(function(){
		l_team = true; r_team = false;
		$('#modal_l_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_r_team_name a').css({'border-color':'#2C506C'});
		$('#modal_l_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_r_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_l_team a').addClass('bet_on_coef');
		$('#coef_r_team a').removeClass('bet_on_coef');
		$('#checkmark_l').css({'display':'block'});
		$('#checkmark_r').css({'display':'none'});
		coef = $('.l_coef').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('.l_team').click(function(){
		l_team = true; r_team = false;
		$('#modal_l_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_r_team_name a').css({'border-color':'#2C506C'});
		$('#modal_l_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_r_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_l_team a').addClass('bet_on_coef');
		$('#coef_r_team a').removeClass('bet_on_coef');
		$('#checkmark_l').css({'display':'block'});
		$('#checkmark_r').css({'display':'none'});
		coef = $('.l_coef').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('.r_team').click(function(){
		r_team = true; l_team = false;
		$('#modal_r_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_l_team_name a').css({'border-color':'#2C506C'});
		$('#modal_r_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_l_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_r_team a').addClass('bet_on_coef');
		$('#coef_l_team a').removeClass('bet_on_coef');
		$('#checkmark_r').css({'display':'block'});
		$('#checkmark_l').css({'display':'none'});
		coef = $('.r_coef').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('.r_coef').click(function(){
		r_team = true; l_team = false;
		$('#modal_r_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_l_team_name a').css({'border-color':'#2C506C'});
		$('#modal_r_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_l_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_r_team a').addClass('bet_on_coef');
		$('#coef_l_team a').removeClass('bet_on_coef');
		$('#checkmark_r').css({'display':'block'});
		$('#checkmark_l').css({'display':'none'});
		coef = $('.r_coef').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#modal_l_team_name a').click(function(){
		l_team = true; r_team = false;
		$('#modal_l_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_r_team_name a').css({'border-color':'#2C506C'});
		$('#modal_l_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_r_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_l_team a').addClass('bet_on_coef');
		$('#coef_r_team a').removeClass('bet_on_coef');
		$('#checkmark_l').css({'display':'block'});
		$('#checkmark_r').css({'display':'none'});
		coef = $('#coef_l_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#modal_l_team_logo').click(function(){
		l_team = true; r_team = false;
		$('#modal_l_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_r_team_name a').css({'border-color':'#2C506C'});
		$('#modal_l_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_r_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_l_team a').addClass('bet_on_coef');
		$('#coef_r_team a').removeClass('bet_on_coef');
		$('#checkmark_l').css({'display':'block'});
		$('#checkmark_r').css({'display':'none'});
		coef = $('#coef_l_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#coef_l_team a').click(function(){
		l_team = true; r_team = false;
		$('#modal_l_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_r_team_name a').css({'border-color':'#2C506C'});
		$('#modal_l_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_r_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_l_team a').addClass('bet_on_coef');
		$('#coef_r_team a').removeClass('bet_on_coef');
		$('#checkmark_l').css({'display':'block'});
		$('#checkmark_r').css({'display':'none'});
		coef = $('#coef_l_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#modal_r_team_name a').click(function(){
		r_team = true; l_team = false;
		$('#modal_r_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_l_team_name a').css({'border-color':'#2C506C'});
		$('#modal_r_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_l_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_r_team a').addClass('bet_on_coef');
		$('#coef_l_team a').removeClass('bet_on_coef');
		$('#checkmark_r').css({'display':'block'});
		$('#checkmark_l').css({'display':'none'});
		coef = $('#coef_r_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#modal_r_team_logo').click(function(){
		r_team = true; l_team = false;
		$('#modal_r_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_l_team_name a').css({'border-color':'#2C506C'});
		$('#modal_r_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_l_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_r_team a').addClass('bet_on_coef');
		$('#coef_l_team a').removeClass('bet_on_coef');
		$('#checkmark_r').css({'display':'block'});
		$('#checkmark_l').css({'display':'none'});
		coef = $('#coef_r_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#coef_r_team a').click(function(){
		r_team = true; l_team = false;
		$('#modal_r_team_name a').css({'border-color':'#3B89C3'});
		$('#modal_l_team_name a').css({'border-color':'#2C506C'});
		$('#modal_r_team_logo').css({'background-color':'#85C7F8','border':'2px solid #D83E20'});
		$('#modal_l_team_logo').css({'background-color':'#2C506C','border':'none'});
		$('#coef_r_team a').addClass('bet_on_coef');
		$('#coef_l_team a').removeClass('bet_on_coef');
		$('#checkmark_r').css({'display':'block'});
		$('#checkmark_l').css({'display':'none'});
		coef = $('#coef_r_team a').html();
		coef = coef.replace(/\s+/g, '');
		$('#coef').html(coef);
		if($('#choose_of_sum input').val() != 0) {
			coef = Number.parseFloat(coef);
			$('#n').html(Math.round(sum_of_bet * coef));
		}
	});
	$('#choose_of_sum input').keyup(function(){
		sum_of_bet = $('#choose_of_sum input').val();
		coef = $('#coef').html();
		coef = Number.parseFloat(coef);
		$('#n').html(Math.round(sum_of_bet * coef));
	});
	$('#btn_do_bet').click(function(){
		var o = true;
		sum_of_bet = $('#choose_of_sum input').val();
		if (sum_of_bet < 10 || sum_of_bet == 0) {
			$('#min_sum_of_bet').css({'color':'#00D0D8'});
			o = false;
		} else {
			$('#min_sum_of_bet').css({'color':'#fff'});
			o = true;
		}
		if (l_team && sum_of_bet != 0 && o) {

		} else if (r_team && sum_of_bet != 0 && o) {

		}
	});
});

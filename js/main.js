
/* Search */
document.addEventListener("DOMContentLoaded", function(event) {

	var header_search = document.getElementsByClassName("header-search")[0];
	var form = document.getElementsByClassName("form")[0];

	header_search.onclick = function () {
		form.className += " show";
	};


/* Tabs */
	$(function() {
		$( "#char-tabs").tabs();
	});


/* Calculator */
	'use strict';

	var submit = $('.calc');
	var clear = $('.js-reset');

	submit.click(function(e){
		e.preventDefault();

		var price = $('.choose option:selected').val();
		var amount = $('.js-amount').val();
		var discount = 0.1;
		var total_cost = (price * amount).toFixed(2);
		var charged = (total_cost - (total_cost * discount)).toFixed(2);
		charged = charged + '&#36;, ' + ' <span> 10% discount included.</span> ';

		if (price == '') {
			$('.choose').addClass('error');
			return;
		}
		if(amount < 10){
			charged = total_cost + '&#36;, ' + ' <span> sorry no discount.</span> ';
		}
		$('.result').html(charged);
	});

	clear.click(function () {
		//$('.feed').trigger('reset');
		$('.feed')[0].reset();
		$('.result').html('');
	});



});










/* Search */
document.addEventListener("DOMContentLoaded", function(event) {

	var header_search = document.getElementsByClassName("header-search")[0];
	var form = document.getElementsByClassName("form")[0];

	header_search.onclick = function () {
		form.className += " show";
	};
});


/* Tabs */
	$(function() {
		$( "#char-tabs").tabs();
	});


/* Calculator */
$(document).ready(function(){
	var submit = $('input.calc');
	submit.click(function(e){
		e.preventDefault();

		var price = $('.choose option:selected').val();

		var amount = $('.js-amount').val();
		var discount = 0.1;
		var total_cost = price * amount;
		var charged = total_cost - (total_cost * discount);
		charged = charged.toFixed(2);
		charged = charged + '$' + ' <span>, 10% discount included.</span> ';

		console.log(price);
		if (price == '') {
			$('.choose').addClass('error');
			return;
		}
		if(amount < 10){
			charged = total_cost + '$' + ' <span>, sorry no discount.</span> ';
		}
		$('.result').html(charged);
	});



});

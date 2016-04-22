
/* Search */

$(document).ready(function () {
});

document.addEventListener("DOMContentLoaded", function(event) {

	var header_search = document.getElementsByClassName("header-search")[0];
	var form = document.getElementsByClassName("form")[0];

	header_search.onclick = function () {
		form.className += " show";
	};


/* Tabs */
	$(function() {
		$( "#characteristic-tabs").tabs();
	});


/* Calculator */
	var discount = 0.1;
	var submit = $('.js-calc');
	var clear = $('.js-reset');
	var choosePrice = $('.choose');
	var price = choosePrice.val();
	var chooseAmount = $('.js-amount');
	var amount = chooseAmount.val();
	var result = $('.result');

	//submit.on('click', function(e){
	//	e.preventDefault();
	//	or
	//$('body').on('click', submit, function(e){
	//	e.preventDefault();

	choosePrice.change( function(){
		price = choosePrice.val();
		calc();
	});
	chooseAmount.change('change, keydown, keyup', function(){
		amount = chooseAmount.val();
		calc();
	});

	$('body')
		.on('click', '.js-calc', function(e){
			e.preventDefault();
			calc();
		})
		.on('click', '.js-reset', function(){
			//$('.feed').trigger('reset');
			result.html('');
			$('#js-feed')[0].reset();
		});

	function calc () {
		var total_cost = (price * amount).toFixed(2);
		var charged = (total_cost - (total_cost * discount)).toFixed(2);
		charged = charged + ' &#36;, ' + ' <span> 10% discount included.</span> ';

		if(amount < 10){
			charged = total_cost + '&#36;, ' + ' <span> sorry no discount.</span> ';
		}
		result.html(charged);
	}
	calc();

});








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


/* Slider Current Item*/
	$('.slider-detail').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		easing: 'easeInExpo',
		pauseOnHover: true,
		focusOnSelect: false,
		swipeToSlide: true,
		infinite: true,
		arrows: true,
		dots: true,
		centerMode: false,
		adaptiveHeight: false,
		asNavFor: '#carousel'
	});

	$('#carousel').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		asNavFor: '.slider-detail',
		centerMode: true,
		focusOnSelect: true
	});



/* Calculator */
	if($('#js-feed').length ){

		var discount = 0.1;
		var submit = '.js-calc';
		var clear = '.js-reset';
		var choosePrice = $('#choose');
		var price = choosePrice.find('option:selected').attr('data-price');
		var chooseAmount = $('#amount');
		var amount = chooseAmount.val();
		var result = $('#result');
		var calc_description = $('#calc-description');

		console.log(price);

		//submit.on('click', function(e){
		//	e.preventDefault();
		//	or
		//$('body').on('click', submit, function(e){
		//	e.preventDefault();

		choosePrice.change( function(){
			calc();
		});
		chooseAmount.change('change, keydown, keyup', function(){
			calc();
		});

		$('body')
			.on('click', submit, function(e){
				e.preventDefault();
				calc();
			})
			.on('click', clear, function(){
				//$('#js-feed').trigger('reset');
				result.html('');
				calc_description.html('');
				$('#js-feed')[0].reset();
			});

		function calc () {
			price = choosePrice.find('option:selected').attr('data-price');
			amount = chooseAmount.val();

			var total_cost = (price * amount).toFixed(2);
			var charged = (total_cost - (total_cost * discount)).toFixed(2);

			charged = charged + ' &#36;, ' + ' <span> 10% discount included.</span> ';

			if(amount < 10){
				charged = total_cost + '&#36;, ' + ' <span> sorry no discount.</span> ';
			}
			result.html(charged);

			calc_description.html(description[choosePrice.val()]);
			console.log(price + ' * ' + amount + ' = ' + price*amount );
		}
		calc();
	}


});








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
		$("#characteristic-tabs").tabs();
	});

/* Slider Banner*/
	$('.slick-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: 'ease-in-out',
		pauseOnHover: true,
		focusOnSelect: false,
		swipeToSlide: true,
		infinite: true,
		arrows: true,
		dots: true,
		centerMode: false,
		adaptiveHeight: false
	});

/* Slider Current Item*/
	$('.slider-detail').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
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

	}).on('afterChange', function(event, slick, currentSlide){
		var sliderDetail = $('.slider-detail');
		var sliderItem = sliderDetail.find('.slider-item[data-slick-index="' + currentSlide + '"]').attr('data-slick');
		//console.log(sliderItem);

		var choosePrice = $('#choose');
		var price = choosePrice.find('option:selected').attr('data-price');
		choosePrice.val(sliderItem);

		calc();
	});

	$('#carousel').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		swipeToSlide: true,
		asNavFor: '.slider-detail',
		centerMode: true,
		focusOnSelect: true
	});

/* Calculate Current Item*/
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
		var sliderDetail = $('.slider-detail');

		choosePrice.change( function(){
			var priceVal = choosePrice.val();
			//console.log(priceVal);

			var slideItem = sliderDetail.find('[data-slick="' + priceVal + '"]');
			//console.log(slideItem);

			var slideIndex = slideItem.attr('data-slick-index');
			console.log(slideIndex);

			sliderDetail.slick('slickGoTo', slideIndex, true);

			calc();
		});
		chooseAmount.change('change, keydown, keyup', function(){
			calc();
		});

		//submit.on('click', function(e){
		//	e.preventDefault();
		//	or
		//$('body').on('click', submit, function(e){
		//	e.preventDefault();
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

			charged = '&#36;' + charged + ','  + ' <span> 10% discount included.</span> ';

			if(amount < 10){
				charged = '&#36;' + total_cost + ',' + ' <span> sorry no discount.</span> ';
			}
			result.html(charged);
			calc_description.html(description[choosePrice.val()]);

		}
	}

/* Calculate Item*/
	if( $('.to_card').length ){

		var itemAmount  = $('.item-amount');

		itemAmount.each(function(){
			item_calc($(this));
		});

		itemAmount.change('change, keydown, keyup', function(){
			item_calc($(this));
		});

		function item_calc(item_amount){
			var getAmount = item_amount.val(),
				itemProduct = item_amount.parents('.item-product'),
				pricing = itemProduct.attr('data-price'),
				charging = itemProduct.find('.price');

			var itemCost = ((getAmount * pricing).toFixed(2));
			var lastCost = itemCost + ' $';
			charging.html(lastCost);

			console.log(lastCost);
		}
	}


});







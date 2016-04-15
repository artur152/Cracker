

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


/* Date Picker */
$(document).ready(function(){
	var d = new Date();

/* global datepicker */
	$(function() {
		$( ".datepicker" ).datepicker({
			altField: "#actualDate",
			duration: "slow",
			changeMonth: true,
			changeYear: true,
			maxDate: "+2y +2m +1w +1d",
			minDate: new Date(d.getFullYear(), d.getMonth(), d.getDate())
		});
	});

/* lodging-datepicker-arriving */
	$(function() {
		$( "#lodging-datepicker-arriving" ).datepicker({
		});
	});
	$(function() {
		$( "#lodging-datepicker-departing" ).datepicker({

		});
	});

/* flights-datepicker-arriving */
	$(function() {
		$( "#flights-datepicker-arriving" ).datepicker({
		});
	});
	$(function() {
		$( "#flights-datepicker-departing" ).datepicker({
		});
	});
});


/* Sidebar Scrolling */
var fix = 0;
var sidebar, sidebarPos, sidebarHeight, footer, footerPos, wrap, wrapHeight;

function sidebarFixed() {
	$(document).scroll(function () {
		//console.log(sidebarPos = sidebar.position().top);
		//console.log(sidebarHeight = sidebar.outerHeight());
		//console.log(footerPos = footer.position().top);

		//console.log(fix, sidebarHeight);
		//console.log(fix + sidebarHeight);
		//console.log(footerPos);

		fix = $(window).scrollTop();
		if (fix > sidebarPos) {
			if (fix + sidebarHeight < footerPos) {
				sidebar.addClass('fixed').removeClass('absolute');
			} else {
				sidebar.addClass('absolute').removeClass('fixed');
			}
		}else {
			sidebar.removeClass('fixed').removeClass('absolute');
		}
	});
}
$(document).ready(function(){
	sidebar = $('.sidebar');
	if(sidebar.length /*&& sidebarHeight > wrapHeight*/) {
		footer = $('footer');
		wrap = $('.wrap');
		wrapHeight = wrap.outerHeight();
		sidebarPos = sidebar.offset().top;
		sidebarHeight = sidebar.outerHeight();
		footerPos = footer.position().top;
		sidebarFixed();
	}


		//Input Phone Nubmer Mask
	$("#phone").mask('(999) 999 99 99');
});



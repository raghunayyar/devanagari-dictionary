console.log('The JS Works.');

function DropDown(el) {
	this.dd = el;
	this.opts = this.dd.find('ul.dropdown > li');
	this.val = [];
	this.index = [];
	this.initEvents();
}

DropDown.prototype = {
	initEvents : function() {
		var obj = this;

		obj.dd.on('click', function(event){
			$(this).toggleClass('active');
			event.stopPropagation();
		});

		obj.opts.children('label').on('click',function(event){
			var opt = $(this).parent(),
				chbox = opt.children('input'),
				val = chbox.val(),
				idx = opt.index();

			($.inArray(val, obj.val) !== -1) ? obj.val.splice( $.inArray(val, obj.val), 1 ) : obj.val.push( val );
			($.inArray(idx, obj.index) !== -1) ? obj.index.splice( $.inArray(idx, obj.index), 1 ) : obj.index.push( idx );
		});
	},
	getValue : function() {
		return this.val;
	},
	getIndex : function() {
		return this.index;
	}
}

$(function() {

	$(document).click(function() {
		$('.custom-dropdown-wrapper').removeClass('active');
	});

});

/* Transitions to a scrollspy */

$("#know-more").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});

$(function() {

	/*
		This corresponds to the topbar to be used in the search results page.
		This gets fixed on top.
	*/


	if (window.location.href == 'http://localhost:8888/devanagari-dictionary/index.php/home/search') {
		var searchtopbar = $('.search-topbar');
		var origOffsetY = searchtopbar.offset().top;

		function scroll() {
			if ($(window).scrollTop() >= origOffsetY) {
				$('.search-topbar').addClass('sticky');
			} else {
				$('.search-topbar').removeClass('sticky');
			}


		}
		document.onscroll = scroll;

			/* This scrolls to the top of the page */
		$('#scrolltotop').click( function () {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}
});
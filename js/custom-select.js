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

	var dd1 = new DropDown($('#languagesearch'));
	var dd2 = new DropDown($('#combinationsearch'));

	$(document).click(function() {
		// all dropdowns
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
	var element = $('.home-page');
	var backgrounds = new Array('#333', '#3e6373', '#564c4c');

	var current = 0;

	function nextBackground() {
		element.css("background", backgrounds[current = ++current % backgrounds.length]);

		setTimeout(nextBackground, 7000);
	}
	
	setTimeout(nextBackground, 7000);
	element.css("background", backgrounds[0]);
});
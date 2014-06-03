//Hook up trip overlays
$(document).ready(function(){

	var minWidth = 500,
		minHeight = 500;


	$('.spot').on('click touchstart', function(e){
		e.preventDefault();

		var overlayWidth = $(window).width() - 100,
			overlayHeight = $(window).height() - 100;

		var content = $('[data-spot-target=' + $(this).attr('data-spot') + ']').html();
		$.fancybox(content, {
			helpers: {
			    overlay: {
			      locked: false
			    }
			},

			openMethod: 'blurIn',

			closeMethod: 'blurOut',

			width: overlayWidth,
			height: overlayHeight,

			minWidth: 500,
			minHeight: 500,

			autoSize: false,

			scrolling: 'no'
		});

		$('.fancybox-wrap .upper-frame').height($('.fancybox-wrap').height() - 124);
		$('.spot-overlay-image img').sizeImageForOverlay();

		$('.spot-overlay-photo').on('click', function(){

			switchToImage(this, $(this).attr('data-id'));

		});
	});
});

//Resize the upper area when the window (and thus the modal) is resized
$(window).on('resize', function(){
	if($('.fancybox-wrap').length > 0){
		$('.fancybox-wrap .upper-frame').height($('.fancybox-wrap').height() - 124);
	}
});

//Letterbox the image
$.fn.sizeImageForOverlay = function(){
	if ($(this).height() >= $(this).width()){
		$(this).addClass('height-bound');
	} else {
		$(this).addClass('width-bound');
	}
}

function switchToImage(context, imageNumber){
	var parent = $(context).parent();
	var target = parent.find('.spot-overlay-photo[data-id=' + imageNumber + ']');

	var targetImage = target.attr('data-large-url');
	var targetDescription = target.attr('data-description');

	parent.find('.spot-overlay-photo').removeClass('active');
	target.addClass('active');

	$('.upper-frame').css('opacity', 0);

	setTimeout(function(){

		console.log(targetImage, targetDescription);

		$('.spot-overlay-image img').attr('src', targetImage);
		$('.spot-overlay-description').text(targetDescription);
		$('.upper-frame').css('opacity', 1);
		
	}, 400);
}
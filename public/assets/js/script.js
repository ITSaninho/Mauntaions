$(document).ready(function() {
	var small = 1, big = 2;
	var navLink = $('.nav-link');
	var currentModal = -1;
	var width = $(window).width();
	var currentTravel = 1;

	changeTravelActive();
	changeOnResize();

	$(window).resize(function(){
		width = $(window).width();
		changeOnResize();
	}).resize();

	function changeTravelActive() {
		currentTravel = currentTravel > 5 ? 1 : currentTravel;
		currentTravel = currentTravel < 1 ? 5 : currentTravel;

		$('.travel-carousel-indicators .carousel-indicators > li').removeClass('active');
		$('.travel-carousel-indicators .carousel-indicators li:nth-child('+ currentTravel +')').addClass('active');
	};

	var checkcurrentModalPosition = function() {
		if (currentModal > 5) {
			$("#modal-next").addClass('disabled');
		} else {
			$("#modal-next").removeClass('disabled');
		}

		if (currentModal < 2) {
			$("#modal-prev").addClass('disabled');
		} else {
			$("#modal-prev").removeClass('disabled');
		}
	};

	function changeOnResize() {	

		if ( width > 768) {
			
			$('.comments .carousel-inner .big .carousel-item:first-child').addClass('active');
		} else {


		 	$('.nav-link').on('click', function() {
				$('.navbar-toggler').trigger('click');
			$('nav').removeClass('white-bg');
		});
		}
	};	

	$("#small-image").mouseenter(function() {

		$(this).animate({
			'margin-top': '-19vw',
			'margin-left': '13vw',
			'min-width': '35vw',
			'min-height': '33vw'
		}, 500, function() {
			big = big > 3 ? 1 : small;
			small--;
			small = small < 1 ? 3 : small;
			$("#big-image").attr("src", "/assets/img/about-pic" + big + ".png");
			$(this).css("opacity", "0");
			$("#small-image").attr("src", "/assets/img/about-pic" + small + ".png");

			$("#small-image").animate({
				'min-height': '19vw',
				'margin-top': '0',
				'margin-left': '7vw',
				'min-width': '19vw',
				'opacity': '1'
			},300 );
		});
	});

	$('#travel-carousel, #comments-carousel').on('mousedown',function(e) {

		e.preventDefault();

		switch (e.which) {
   		case 1: //leftclick
        $(this).css('cursor', 'url("/assets/img/closedhand.cur"), move');
      break;
     }
	}).on('mouseup',function() {

		$(this).css('cursor', 'url("/assets/img/openhand.cur"), move');
	}).on('mouseenter', function() {

		$(this).css('cursor', 'url("/assets/img/openhand.cur"), move');
	});
	
	$(".carousel").swipe({

	  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

	    if (direction == 'left') $(this).carousel('next');
	    if (direction == 'right') $(this).carousel('prev');
	  },
	  allowPageScroll:"vertical"
	});

	$('#travel-carousel').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('#travel-carousel .carousel-item').length;

    if (e.direction == 'left') {
			currentTravel++;
    } else {
    	currentTravel--;
    }
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i=0; i<it; i++) {
        // append slides to end
        if (e.direction=="left") {

            $('#travel-carousel .carousel-item').eq(i).appendTo('#travel-carousel .carousel-inner');
        } else {
            
            $('#travel-carousel .carousel-item').eq(0).appendTo('#travel-carousel .carousel-inner');
        }
      }
    }
  	changeTravelActive();
	});

	$('.navbar-toggler').on('click', function() {
		$('nav').toggleClass('white-bg');
	});

	$('.gallery-image').click(function() {

		var currentModalUrl = $(this).attr('src');
		$('.enlargeImageModalSource').attr('src', currentModalUrl);
		$('#gallery-modal').modal('show');
		currentModal = currentModalUrl.charAt(currentModalUrl.length - 5);
		checkcurrentModalPosition();
	});

	$('#modal-next').click(function() {

		if (currentModal < 6 ) {
			currentModal++;
			var newUrl = "/assets/img/gallery-pic" + currentModal + ".png";
			$('.enlargeImageModalSource').attr('src', newUrl);
		}
		checkcurrentModalPosition();
	});

	$('#modal-prev').click(function() {

		if (currentModal > 1 ) {
			currentModal--;
			var newUrl = "/assets/img/gallery-pic" + currentModal + ".png";
			$('.enlargeImageModalSource').attr('src', newUrl);
		}
		checkcurrentModalPosition();
	});

	$('nav a').click (function(event) {

		navLink.removeClass('active');
		event.preventDefault();
		var target = $(this).attr("href");
		$('html, body').animate({scrollTop: $(target).offset().top - 75 }, 400);
		$(this).addClass('active');

		return false;
	});

	$(".form-control").click(function() {
		$(this).removeClass('warning');
	});

	$(".admin-toggler").click(function() {
		$(".admin-panel").toggleClass('admin-hidden');
		$(".main-content, .footer, nav ").toggleClass('content-shown');
	});
});
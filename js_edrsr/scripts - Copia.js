
(function($) {
	'use strict'; // Start of use strict
	$('.caja').click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
		return false;
	});



	/* Every time the window is scrolled ... */
	$(window).scroll(function(e) {
		/* Check the location of each desired element */
		$('.arriba').each(function() {
			var bottom_of_object2 = $(this).offset().top;
			var bottom_of_window2 = $(window).scrollTop() + $(window).height();
			/* If the object is completely visible in the window, fade it it */
			if (bottom_of_window2 > bottom_of_object2) {
				$(this).addClass('mueve');
			}
		});
	});
	/* Every time the window is scrolled ... */
	$(window).scroll(function(e) {
		/* Check the location of each desired element */
		$('.abajo').each(function() {
			var bottom_of_object2 = $(this).offset().top;
			var bottom_of_window2 = $(window).scrollTop() + $(window).height();
			/* If the object is completely visible in the window, fade it it */
			if (bottom_of_window2 > bottom_of_object2) {
				$(this).addClass('mueve');
			}
		});
	});

	$('.txt').fadeOut();
	$('#saludM').on('click', function(e) {
		$('#saludM').addClass('active');
		$('#saludM .img .medio').fadeOut('1500');
		$('#saludM .txt').fadeIn('1500');

		$('#educaM, #finanM, #retailM, #logM, #hospiM, #gobM, #energiaM').removeClass('active');
		$('#educaM .img .medio, #finanM .img .medio, #retailM .img .medio, #logM .img .medio, #hospiM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#educaM .txt, #finanM .txt, #retailM .txt, #logM .txt, #hospiM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#educaM').on('click', function(e) {
		$('#educaM').addClass('active');
		$('#educaM .img .medio').fadeOut('1500');
		$('#educaM .txt').fadeIn('1500');

		$('#saludM, #finanM, #retailM, #logM, #hospiM, #gobM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #finanM .img .medio, #retailM .img .medio, #logM .img .medio, #hospiM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #finanM .txt, #retailM .txt, #logM .txt, #hospiM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#finanM').on('click', function(e) {
		$('#finanM').addClass('active');
		$('#finanM .img .medio').fadeOut('1500');
		$('#finanM .txt').fadeIn('1500');

		$('#saludM, #educaM, #retailM, #logM, #hospiM, #gobM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #retailM .img .medio, #logM .img .medio, #hospiM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #retailM .txt, #logM .txt, #hospiM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#retailM').on('click', function(e) {
		$('#retailM').addClass('active');
		$('#retailM .img .medio').fadeOut('1500');
		$('#retailM .txt').fadeIn('1500');

		$('#saludM, #educaM, #finanM, #logM, #hospiM, #gobM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #finanM .img .medio, #logM .img .medio, #hospiM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #finanM .txt, #logM .txt, #hospiM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#logM').on('click', function(e) {
		$('#logM').addClass('active');
		$('#logM .img .medio').fadeOut('1500');
		$('#logM .txt').fadeIn('1500');

		$('#saludM, #educaM, #finanM, #retailM, #hospiM, #gobM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #finanM .img .medio, #retailM .img .medio, #hospiM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #finanM .txt, #retailM .txt, #hospiM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#hospiM').on('click', function(e) {
		$('#hospiM').addClass('active');
		$('#hospiM .img .medio').fadeOut('1500');
		$('#hospiM .txt').fadeIn('1500');

		$('#saludM, #educaM, #finanM, #retailM, #logM, #gobM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #finanM .img .medio, #retailM .img .medio, #logM .img .medio, #gobM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #finanM .txt, #retailM .txt, #logM .txt, #gobM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#gobM').on('click', function(e) {
		$('#gobM').addClass('active');
		$('#gobM .img .medio').fadeOut('1500');
		$('#gobM .txt').fadeIn('1500');

		$('#saludM, #educaM, #finanM, #retailM, #logM, #hospiM, #energiaM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #finanM .img .medio, #retailM .img .medio, #logM .img .medio, #hospiM .img .medio, #energiaM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #finanM .txt, #retailM .txt, #logM .txt, #hospiM .txt, #energiaM .txt').fadeOut('1500')
	});
	$('#energiaM').on('click', function(e) {
		$('#energiaM').addClass('active');
		$('#energiaM .img .medio').fadeOut('1500');
		$('#energiaM .txt').fadeIn('1500');

		$('#saludM, #educaM, #finanM, #retailM, #logM, #hospiM, #gobM').removeClass('active');
		$('#saludM .img .medio, #educaM .img .medio, #finanM .img .medio, #retailM .img .medio, #logM .img .medio, #hospiM .img .medio, #gobM .img .medio').fadeIn('1500');
		$('#saludM .txt, #educaM .txt, #finanM .txt, #retailM .txt, #logM .txt, #hospiM .txt, #gobM .txt').fadeOut('1500')
	});






	var pageWidth = $(window).width();
		if (pageWidth > 10) {
			setTimeout(
				function() {
					$(document).ready(function() {
						var divheight = $('#cajas').height();
						$('#pais').css('height', divheight - 0 + 'px');
					});
				}, 1000);
		};

})(jQuery); // End of use strict

	$(document).ready(function() {
		var pageWidth = $(window).width();
		if (pageWidth > 800) {
			setTimeout(
				function() {
					$(document).ready(function() {
						var divheight = $('img.iimagen').height();
						$('.texto').css('height', divheight - 0 + 'px');
					});
				}, 10);
		};
	});

	$(document).ready(function() {
		var altura = $('.mennnu').offset().top;
		$(window).on('scroll', function() {
			if ($(window).scrollTop() > altura) {
				$('header').addClass('menu-fondo');
			} else {
				$('header').removeClass('menu-fondo');
			}
		});

	});
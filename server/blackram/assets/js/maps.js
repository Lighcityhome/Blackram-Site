$(document).ready(function(){   

    $('.manufacture').on('click', function(event){
		event.preventDefault();
		$('.map__manufacture').addClass('is-visible');
		$('.map__textyleprofi').removeClass('is-visible');
		$('.map__sadovod').removeClass('is-visible');
		$('.manufacture').addClass('on');
		$('.textyleprofi').removeClass('on');
		$('.sadovod').removeClass('on');
	});

    $('.textyleprofi').on('click', function(event){
		event.preventDefault();
		$('.map__manufacture').removeClass('is-visible');
		$('.map__textyleprofi').addClass('is-visible');
		$('.map__sadovod').removeClass('is-visible');
		$('.manufacture').removeClass('on');
		$('.textyleprofi').addClass('on');
		$('.sadovod').removeClass('on');
	});

    $('.sadovod').on('click', function(event){
		event.preventDefault();
		$('.map__manufacture').removeClass('is-visible');
		$('.map__textyleprofi').removeClass('is-visible');
		$('.map__sadovod').addClass('is-visible');
		$('.manufacture').removeClass('on');
		$('.textyleprofi').removeClass('on');
		$('.sadovod').addClass('on');
	});
});
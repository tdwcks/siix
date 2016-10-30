// =================================================================
// 	Siix Music
// 	Global Javascript
// =================================================================


// Hamburger Menu Trigger 
$( ".menu-trigger" ).on( "click", function() {
 	$('nav').toggleClass('active');
 	$('.social').toggleClass('active');
});

// Exit
$( ".exit" ).on( "click", function() {
 	$('.information').removeClass('active');
});

// Exit
 $( ".trigger-info" ).on( "click", function() {
 	$('.information').toggleClass('active');
 	swiper.stopAutoplay();
 	event.preventDefault();
});

// Trigger Description
$( ".slide-description h5" ).on( "click", function() {
 	$('.slide-description').toggleClass('active');
 	$('.swiper-button-prev').toggleClass('active');
 	$('.swiper-button-next').toggleClass('active');
 	$('.swiper-pagination').toggleClass('active');
});

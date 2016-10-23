// =================================================================
// 	Siix Music
// 	Global Javascript
// =================================================================


// Hamburger Menu Trigger 
$( ".menu-trigger" ).on( "click", function() {
 	$('nav').toggleClass('active');
 	$('.social').toggleClass('active');
});

// Trigger Description
$( ".slide-description h5" ).on( "click", function() {
 	$('.slide-description').toggleClass('active');
 	$('.swiper-button-prev').toggleClass('active');
 	$('.swiper-button-next').toggleClass('active');
 	$('.swiper-pagination').toggleClass('active');
});

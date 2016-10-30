<?php /* Template Name: Composer Area */ ?>
<?php get_header(); ?>
<section class="contact work-with-us">
	<div class="grid-container">
		<div class="row">
			<div class="col-4">
				<h4>Work With Us</h4>
				<p>If you're an aspiring artist, composer, producer, etc. and would like to send us music for consideration, please email us at <a href="mailto:music@siixmusic.com">music@siixmusic.com</a></p>
			</div>
			<div class="col-4 shift-2">
				<h4>Log In To Composer Area</h4>
				<form name="loginForm" id="loginForm" action="https://siix.teamwork.com/" method="post">
				    <input type="hidden" name="action" value="login">
				    <div>
				        <label for="userLogin">Username:</label><br /><input type="text" name="userLogin" id="userLogin" /><br />
				        <label for="password">Password:</label><br /><input type="password" name="password" id="password" /><br />

				        <input type="submit" value="Login" />
				    </div>
				</form>
			</div>
		</div>
	</div>
	 <div class="swiper-holder">
        <div class="swiper-wrapper">
        	<?php if( have_rows('composer_slide') ): while ( have_rows('composer_slide') ) : the_row(); ?>
            	<div class="swiper-slide"><img src="<?php>the_sub_field('image');?>"></div>
            <?php endwhile; else : endif;?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-holder', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay: '4000',
        spaceBetween: 0
    });
    </script>
</section>
<?php get_footer(); ?>
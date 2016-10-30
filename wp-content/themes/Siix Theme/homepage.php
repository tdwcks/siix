<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<section class="hero">
    <div class="swiper-container">
        <div class="swiper-wrapper">
			<?php if( have_rows('slides') ): while ( have_rows('slides') ) : the_row(); ?>
			    <div class="swiper-slide">
			    	<div class="slide-description">
			    		<h5><?php the_sub_field('slide_title'); ?></h5>
			    		<div class="description-holder">
			    			<?php the_sub_field('slide_description'); ?>
			    		</div>
			    	</div>
			        <img src="<?php>the_sub_field('slide_image');?>">
			    </div> 
			<?php endwhile; else : endif;?>
		</div>
		<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
        	<div class="swiper-button-prev"></div>
    </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
	<script>
	    var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        spaceBetween: 0,
	        autoplayDisableOnInteraction: true,
	        direction: 'vertical'
	    });
	</script>
</section>
<?php get_footer(); ?>
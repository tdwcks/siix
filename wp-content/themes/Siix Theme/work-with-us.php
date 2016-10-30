<?php /* Template Name: Work With Us */ ?>
<?php get_header(); ?>
<section class="contact jobs">
	<div class="grid-container">
		<div class="row">
			<div class="col-4">
				<h4>Work With Us</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<h5><?php the_field('work_with_us_title'); ?></h5>
				<?php the_field('work_with_us_description'); ?>
			</div>
			<div class="col-6 shift-2">
				<h5>Submit A Message</h5>
				<?php echo do_shortcode( '[contact-form-7 id="61" title="Job Form"]' ); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
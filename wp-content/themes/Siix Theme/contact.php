<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section class="contact">
	<div class="grid-container">
		<div class="row">
			<div class="col-4">
				<h5>We'd love to hear from you</h5>
				<?php the_field('contact_information'); ?>
				<h5 class="padding-top">Careers</h5>
				<p><?php the_field('career_text'); ?></p>
			</div>
			<div class="col-6 shift-2">
				<h5>Submit A Message</h5>
				<?php echo do_shortcode( '[contact-form-7 id="35" title="Contact form 1"]' ); ?>
				<div class="mail-out">
					<h5>Mail Out</h5>
					<p><?php the_field('mailchimp_text'); ?></p>
					<?php mailchimpSF_signup_form(); ?>
				</div>
			</div>
		</div>
	</div>
	<footer>
	<div class="grid-container">
		<div class="row">
			<p><?php the_field('address'); ?></p>
		</div>
	</div>
	</footer>
</section>
<?php get_footer(); ?>
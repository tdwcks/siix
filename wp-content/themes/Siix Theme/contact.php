<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section class="contact">
	<div class="grid-container">
		<div class="row">
			<div class="col-4">
				<h4>Contact</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<h5>We'd love to hear from you</h5>
				<?php the_field('contact_information'); ?>
			</div>
			<div class="col-3 shift-2">
				<h5>Siix Music</h5>
				<p><?php the_field('address'); ?></p>
			</div>
			<div class="col-3">
				<h5>Telephone</h5>
				<p><?php the_field('phone_number'); ?></p>
				<h5>Email</h5>
				<p><?php the_field('email_address'); ?></p>
			</div>
		</div>
		<div class="row bottom-row">
			<div class="col-4">
				<h5>Mail Out</h5>
				<p><?php the_field('mailchimp_text'); ?></p>
				<?php mailchimpSF_signup_form(); ?>
			</div>
			<div class="col-6 shift-2">
				<h5>Submit A Message</h5>
				<?php echo do_shortcode( '[contact-form-7 id="35" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
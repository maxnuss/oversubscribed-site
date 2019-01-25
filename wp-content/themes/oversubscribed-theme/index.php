<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
 $(document).ready(function(){
	$("#hide-welcome").click(function() {
	  $(".welcome").fadeOut();
	});
});
</script>

<div class="welcome">
	<div class="welcome-inner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logotype.png" alt="Logo" class="welcome-logo">
		<div class="welcome-subhead">A weekly newsletter for startup founders about early-stage fundraising.</div>
		
		[REGISTER]
		
		<div class="read-it-first">
			<a href="#" id="hide-welcome">Let me read it first</a>
		</div>
		
	</div><!--welcome-inner-->
</div><!--welcome-->

<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
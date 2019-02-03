<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="register-banner">
        <p>Registering for an Oversubscribed account is free and gets you access to our full archives, as well as our weekly email with fundraising news and exclusive interviews with founders and VCs.</p>
        <a href="/membership-join/membership-registration/" class="btn btn-blue register-banner-join-us">Join Us Here</a></p>
    </div><!--register-banner-->

	<!-- article -->
	<div class="post">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="title"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<span class="author">by <?php the_author_posts_link(); ?></span>
			<!-- /post details -->

			<?php the_content(); ?>

			<?php edit_post_link(); ?>

		</article>
	</div><!--post-->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

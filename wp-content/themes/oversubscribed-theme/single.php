<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

			<p><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
	</div><!--post-->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

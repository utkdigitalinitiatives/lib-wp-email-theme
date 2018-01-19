<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php posted_on(); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','libemailtheme'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>

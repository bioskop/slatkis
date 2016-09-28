<?php get_header(); ?>

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php the_title('<h1 class="entry-title">','</h1>'); ?>

			<?php if( has_post_thumbnail() ): ?>
				<div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
			<?php endif; ?>

			<?php the_content(); ?>
		
		</article>

		<?php endwhile; ?>

		<?php endif; ?>

<?php get_footer(); ?>
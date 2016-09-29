<?php 
	// Default blog page, wordpress trazi home.php ako je podesen posts page u settings
 ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<?php get_template_part( 'content',get_post_format() ); ?>

		<?php endwhile; ?>

	<!-- PAGINATION -->
	<div class="row">
		<div class="col-xs-6 text-left">
			<?php next_posts_link('Older Posts'); ?>
		</div>
		<div class="col-xs-6 text-right">
			<?php previous_posts_link('Newer Posts'); ?>
		</div>
	</div>
	<?php endif;?>

<?php get_footer(); ?>

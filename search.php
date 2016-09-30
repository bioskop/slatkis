<?php get_header(); ?>

<div class="row">
	
	<?php 
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>

				<div class="col-xs-12">
					<?php get_template_part('content','search'); ?>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>
	
	<div class="col-xs-12">
		<?php get_sidebar(); ?>
	</div>
	
</div>
<?php get_footer(); ?>
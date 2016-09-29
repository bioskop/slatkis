<?php 
//izabrani front page u settings zahteva ime front-page.php 
//bez obzira koji page se izabere
 ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="row">

	<?php

	$args = array(
		'type'	=>	'post',
		'posts_per_page'	=>	3,
	);

	$lastBlog = new WP_Query($args);

	if( $lastBlog->have_posts() ):
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

			<div class="col-xs-12 col-sm-4">
				<?php get_template_part('content','featured'); ?>
			</div>

		<?php endwhile;?>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>

	
</div>
<?php get_footer(); ?>

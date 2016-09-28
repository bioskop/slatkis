<?php

	$lastBlog = new WP_Query('type=post&posts_per_page=1');


	if( $lastBlog->have_posts() ):

		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

			<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;?>
	<?php endif;?>
<?php wp_reset_postdata(); ?>




<?php

	$args = array(

		'type'	=>	'post',
		'posts_per_page'	=>	2,
	);

	$lastBlog = new WP_Query($args);

	if( $lastBlog->have_posts() ):

		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

			<?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;?>
	<?php endif;?>
<?php wp_reset_postdata(); ?>



<!-- 
============================================
	Prikazuje posledlne postove u 
	kategorijama 1,8,9 
============================================ 
-->

<?php
	
	$args_cat =array(
			'include'	=>	'1, 8, 9'
		);
	
	$categories = get_categories($args_cat);

	foreach ($categories as $category): 
		$args = array(
			'type'	=>	'post',
			'posts_per_page'	=>	1,
			'category__in'	=> $category->term_id,
			'category__not_in'	=> array( 10 )
		);

	$lastBlog = new WP_Query($args);

	if( $lastBlog->have_posts() ):

		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

			<?php get_template_part('content','featured'); ?>

		<?php endwhile;?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	<?php endforeach; ?>

	
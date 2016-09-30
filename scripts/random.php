<?php 

	//Smesta url featured slike u $urlImg i postavlje je kao
	//bg u div elementu, inline.

if ( have_posts() ) : $i=0;
	while ( have_posts() ) : the_post(); ?>
	
	<?php 
		if($i==0):$column = 12; $class = 'second-row-padding';
		elseif($i > 0 && $i <= 2): $column = 6; $class = 'third-row-padding';
		elseif($i > 2): $column = 4;
		endif;
	?>

	<?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_id() ) );  ?>

	<div class="col-xs-<?php echo $column; echo $class; ?>">
		<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);"></div>
	</div>

<?php i++; endwhile; ?>



<!-- PAGINATION -->
<div class="col-xs-6 text-left">
	<?php next_posts_link('Older Posts'); ?>
</div>
<div class="col-xs-6 text-right">
	<?php previous_posts_link('Newer Posts'); ?>
</div>

<?php endif; ?>


<!-- ako u settings postavim broj postova za prikaz, 
custom query post ce da ga prekazi i u tom slucaju kad koristimo 
query post pagination ne radi, resenje: -->

<?php 
	$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 'posts_per_page' => 3, 'paged' => $currentPage);
	//query_posts( $args ) je problematican, koristi $lastBlog = new WP_Query($args);
	query_posts( $args );
	//standard loop
	wp_reset_query();
 ?>

 <!-- wp-config.php , ukljuci debug, ne prikazuje na ekran ali kreira log
 u folderu /wp-content/debug.log -->
 <?php 
 	define('WP_DEBUG', true);
 	define('WP_DEBUG_DISPLAY', false);
 	define('WP_DEBUG_LOG', true);
  ?>
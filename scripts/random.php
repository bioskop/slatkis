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
<!-- post navigation -->

<?php endif; ?>

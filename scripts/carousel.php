<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="row">



		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      
		      <div class="carousel-inner" role="listbox">
				
					<?php

						$args = array(
							'type'	=>	'post',
							'posts_per_page'	=>	3,
						);

						$lastBlog = new WP_Query($args);

						if( $lastBlog->have_posts() ):

							$count = 0;	
							$bullets = '';

							while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

								<div class="item <?php if($count==0): echo 'active'; endif; ?>">
						          <?php the_post_thumbnail('full'); ?>
						          <div class="container">
						            <div class="carousel-caption">
										<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
						            </div>
						          </div>
						        </div>
						
						<?php $bullets .= '<li data-target="#myCarousel" data-slide-to="'.$count.'" class="';?> 
						<?php if($count==0): $bullets .= 'active'; endif; ?> 
						<?php $bullets .= '"></li>';?>

						<?php $count++; endwhile;?>
						<?php endif;?>
						<?php wp_reset_postdata(); ?>

		      </div>

				<!-- Indicators -->
		      <ol class="carousel-indicators">
		        <?php echo $bullets; ?>
		      </ol>

		      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		      </a>
		      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </div><!-- /.carousel -->



	
</div>
<?php get_footer(); ?>

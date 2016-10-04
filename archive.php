<?php get_header(); ?>
<?php get_sidebar(); ?>

	<?php if( have_posts() ): ?>

		<header class="page-header">
	
			<?php  the_archive_title('<h2 class="page-title">', '</h2>'); 
					//u admin panelu se popunjava description za kategorije
					the_archive_description('<div class="taxonomy-description">', '</div>');
			?>
		</header>

		<?php while( have_posts() ): the_post(); ?>

				<?php get_template_part( 'content','archive'); ?>

			<?php endwhile; ?>
			
			<div class="col-xs-12 text-center">
				<?php the_posts_navigation(); ?>
			</div>
			
		<?php endif;?>

<?php get_footer(); ?>

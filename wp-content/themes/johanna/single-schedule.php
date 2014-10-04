<?php

/* Template Name: Single Schedule */

get_header(); ?>
    
    <article class="padded">
    
    <?php get_template_part( 'article', 'header' ); ?>
    
    	<section class="col-2-3">
		
		<?php if ( have_posts() ) : ?>
		
			<?php get_template_part( 'module', 'venues' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
				<?php the_content(); ?>
				
												
			<?php endwhile; ?>
			
		</section>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		<?php get_template_part( 'aside', 'schedule' ); ?>
		
	</article>
	
<?php get_footer(); ?>
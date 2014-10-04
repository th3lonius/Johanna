<?php

/* Template Name: Lineup Page */

get_header(); ?>
       
    <article class="padded">
    
    <?php get_template_part( 'article', 'header' ); ?>
		
		<?php if ( have_posts() ) : ?>
		
		<section class="col-2-3">

			<?php while ( have_posts() ) : the_post(); ?>
			
                <?php $image = get_field('image'); ?>
                <?php if( !empty($image) ): 
 
					// vars
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// thumbnail
					$size = 'medium';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ]; ?>
					

			<header>			
				<img class="target-image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
			</header>
				
				<p><?php the_field( 'bio' ); ?></p>
				
				<?php endif; ?>

			<?php endwhile; ?>
			
		</section>

		<?php else : ?>
			
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
	<?php get_template_part( 'aside', 'lineup' ); ?>
	
	</article>
	
	<?php get_template_part( 'venues', '' ); ?>
	
<?php get_footer(); ?>
<?php

/* Template Name: Lineup Page */

get_header(); ?>
    
<?php
 
    $args = array(
        'post_type' => 'lineup'
    );

    $lineup_query = new WP_Query( $args );

?>
    
    <article id="lineup">
    
    <?php get_template_part( 'article', 'header' ); ?>
    
		<?php if ( $lineup_query->have_posts() ) : ?>
		
			<ul>

			<?php while ( $lineup_query->have_posts() ) : $lineup_query->the_post(); ?>
              
                <?php $image = get_field('image'); ?>
                <?php if( !empty($image) ): 
 
					// vars
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];

					// thumbnail
					$size = 'thumbnail';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ]; ?>
                
				<li>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						<?php the_title( '<h4>', '</h4>' ); ?>
					</a>
				</li>
				
				<?php endif; ?>

			<?php endwhile; ?>
			
			</ul>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


	</article><!-- #lineup -->

<?php get_footer(); ?>


<?php the_field( 'year' ); ?>
<?php

/* Template Name: Festinfo Page */

get_header(); ?>
    
<?php
 
    $args = array(
        'post_type' => 'festinfo'
    );

    $info_query = new WP_Query( $args );

?>


<header>
	<nav class="subnav">
		<ul>
			<li><a href="#ticketing">Tickets &amp; Passes</a></li>
			<li><a href="#venues">Venues</a></li>
			<li><a href="#faq">F.A.Q.</a></li>
			<li><a href="#history">History</a></li>
		</ul>
	</nav>
</header>

    <article class="padded">
    
    <?php get_template_part( 'article', 'header' ); ?>
    
    	<section class="col-2-3">
    
		<?php if ( $info_query->have_posts() ) : ?>
		
			<?php while ( $info_query->have_posts() ) : $info_query->the_post(); ?>
              
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						<?php the_content(); ?>

			<?php endwhile; ?>
			
		</section>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
	<?php get_template_part( 'aside', 'festinfo' ); ?>
	
	</article>	
	
	<?php get_template_part( 'venues', '' ); ?>

<?php get_footer(); ?>
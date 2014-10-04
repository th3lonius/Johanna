<section>

	<?php 
		$events = get_posts(array(
			'post_type' => 'schedule',
			'meta_query' => array(
				array(
					'key' => 'performers', // name of custom field
					'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
					'compare' => 'LIKE'
				)
			)
		));
	?>

	<?php if( $events ): ?>
		<ul>
		<?php foreach( $events as $event ): ?>
			<?php 

			$day = get_field('day', $event->ID);
			$date = get_field('date', $event->ID);
			$time = get_field('time', $event->ID);
			$venue = get_field('venue', $event->ID);

			?>
			<li class="sidebar_node">
				<a href="<?php echo get_permalink( $event->ID ); ?>">
					<h4 class="event-title"><?php echo get_the_title( $event->ID ); ?></h4>
					<section class="showdate <?php if ($day == "Fri") { echo 'friday'; } elseif ($day == "Sat") { echo 'saturday'; } else { echo 'sunday'; } ?>">
						<h3 class="day"><?php echo $day; ?></h3>
						<date><?php echo $date; ?></date>
					</section>
					<time><?php echo $time; ?>p</time>
					<span>@ <?php echo $venue; ?></span>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>

</section>
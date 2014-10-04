<aside class="col-1-3">

	<?php if( have_rows('contacts') ): ?>

	<section>

		<ul class="sidebar_node">

		<?php while ( have_rows('contacts') ) : the_row(); ?>

			<li>
				<h4><?php the_sub_field( 'title' ); ?></h4>
				<address><?php the_sub_field( 'address' ); ?></address>
			</li>

		<?php endwhile; ?>

		</ul>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</section>

</aside>
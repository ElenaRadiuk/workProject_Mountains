<article <?php post_class( array('entry') ); ?> id="page-<?php the_ID(); ?>" role="page">
	<h2 class="page-title"><?php the_title(); ?></h2>
	<section class="entry-content">
		<?php
		// Content example for CSS ajustments - Uncomment it if you need
		//get_template_part( 'template-parts/post/content', 'example' );
		the_content();
		?>
	</section>
</article>

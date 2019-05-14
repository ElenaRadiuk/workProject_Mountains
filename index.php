<?php get_header(); ?>
<section class="entry-section">

    <div class="container">
        <?php get_template_part( 'template-parts/content', 'top-info' ); ?>


        <div class="row">
            <div class="col-md-auto d-none d-lg-block">
                <?php get_template_part( 'template-parts/content', 'menu' ); ?>
            </div>
            <div class="col">
                <?php
                if( have_posts() ):

                    // Start the loop
                    while( have_posts() ): the_post();

                        // Load loop content block template
                        get_template_part( 'template-parts/post/content', 'loop-bt' );

                        // End the loop
                    endwhile;

                else:

                    _e('No content found', I18N_DOMAIN );

                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

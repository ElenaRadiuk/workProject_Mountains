<div class="row plan-post">

    <?php  $i = 1;?>
    <?php $the_query = new WP_Query('cat=6'); ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>


        <div class="col-12 col-md-12 col-lg-6">
            <?php $dateplan = get_post_meta($post->ID, 'date-plan', $single = true);
            $countryplan = get_post_meta($post->ID, 'country-plan', $single = true); ?>

            <article <?php post_class( array('entry') ); ?> id="post-<?php the_ID(); ?>" role="article">
                <div class="plan-detail">
                    <?php if($dateplan !== '') {  ?>
                        <span>
                            <?php echo $dateplan ?>
                        </span>
                    <?php } ?>
                    <?php if($countryplan !== '') {  ?>
                        <span> > </span>
                        <span>
                            <?php echo $countryplan ?>
                        </span>
                    <?php } ?>
                </div>

                <h2 class="entry-title">
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <section class="entry-content">
                    <?php the_excerpt(); ?>
                </section>
            </article>
        </div>
        <?php
        if (($i % 2) === 0) {
            echo '<div class="divider d-none d-lg-block"></div>';
        }
        ?>
        <?php $i++ ;?>

    <?php endwhile; wp_reset_query();?>
</div>



<div class="top-info">
    <div class="row align-items-center h-100">
        <div class="col col-lg-auto logo-wrapper">
            <a class="logo" href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/dist/img/Logo.png" alt="logo"/>
            </a>
        </div>
        <div class="col d-none d-lg-block">
            <div class="main-quote">
                <?php $the_query = new WP_Query('p=41'); ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="main-quote-text"><?php the_title(); ?></div>
                    <span class="main-quote-author"><?php the_content(); ?></span>
                <?php endwhile; wp_reset_query();?>
            </div>
        </div>
    </div>
</div>
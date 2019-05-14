<article <?php post_class( array('entry') ); ?> id="post-<?php the_ID(); ?>" role="article">
    <div class="row post-preview">
	<div class="col col-md-12 col-lg-8">
        <h3 class="entry-title">
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <section class="entry-content">
            <?php the_excerpt(); ?>
        </section>

        <div class="entry-footer">
            <span><?php echo date("dS \\of\ F Y");; ?></span><span class="entry-footer-auth"> > <?php the_author(); ?></span>
            <span class="entry-footer-cat"> > <?php the_category(', '); ?></span>
        </div>
    </div>
    <div class="col-md-4 d-none d-lg-block">
        <div class="img-wrapper-post">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    </div>
</article>



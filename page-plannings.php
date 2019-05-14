<?php
/*
Template Name: plannings
*/
?>

<?php get_header(); ?>
<section class="entry-section">
        <div class="container">

            <?php get_template_part( 'template-parts/content', 'top-info' ); ?>

            <div class="row">
                <div class="col-md-auto d-none d-lg-block">
                    <?php get_template_part( 'template-parts/content', 'menu' ); ?>
                </div>
                <div class="col">

                    <?php get_template_part( 'template-parts/post/content', 'loop-btplan' ); ?>

                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>

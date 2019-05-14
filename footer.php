    </section>
    <footer id="footer">
        <div class="container  d-none d-md-block">
            <div class="row  no-gutters">
                <?php $the_query = new WP_Query('p=46'); ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <div class="col-md-4 offset-lg-3 col-lg-3">
                    <?php $copyright = get_post_meta($post->ID, 'copyright-text', $single = true); ?>
                    <div class="copyright"><?php echo $copyright; ?></div>
                </div>

                <div class="col-lg-4 d-none d-lg-block text-left">
                    <?php $insta = get_post_meta($post->ID, 'socialnet-ic-insta', $single = true);
                    $twit = get_post_meta($post->ID, 'socialnet-ic-twit', $single = true);
                    $vim = get_post_meta($post->ID, 'socialnet-ic-vim', $single = true);
                    $youtube = get_post_meta($post->ID, 'socialnet-ic-youtube', $single = true);
                    $socialnettext = get_post_meta($post->ID, 'socialnet-text', $single = true); ?>

                    <span class="follow-text">
                        <?php echo $socialnettext ?>
                    </span>

                    <?php if($insta !== '') {  ?>
                        <a href="<?php echo $insta ?>" class="ic" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    <?php } ?>
                    <?php if($twit !== '') {  ?>
                        <a href="<?php echo $twit ?>" class="ic" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    <?php } ?>
                    <?php if($vim !== '') {  ?>
                        <a href="<?php echo $vim ?>" class="ic" target="_blank">
                            <i class="fa fa-vimeo"></i>
                        </a>
                    <?php } ?>
                    <?php if($youtube !== '') {  ?>
                        <a href="<?php echo $youtube ?>" class="ic" target="_blank">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    <?php } ?>
                </div>
                <?php endwhile; wp_reset_query();?>

                <div class="col-md-5 col-lg-1">
                    <? wp_nav_menu(array('theme_location' => 'Footer menu', 'menu' => 'footer-info',
                        'menu_class' => 'menu footer-info', 'container' => 'ul')); ?>
                </div>
                <div class="d-none d-md-block d-lg-none col-md-3 col-lg-1 text-right md-menu">
                    <div class="btn-group">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            MENU
                        </div>
                        <? wp_nav_menu(array('theme_location' => 'Main menu', 'menu' => 'main-menu',
                            'menu_class' => 'dropdown-menu drop-up', 'container' => 'ul')); ?>
                    </div>
                </div>
            </div>
        </div>

<!--        //mob-->
        <div class="container-fluid  d-block d-md-none mob-menu-footer">
            <div class="row">
                <div class="col">
                    <nav>
                        <div class="nav-button-m">
                            MENU
                        </div>
                        <div class="menu">
                            <div class="drop-down closed">
                                <div class="additional-block"></div>
                                <? wp_nav_menu(array('theme_location' => 'Footer menu MOB', 'menu' => 'footer_menu_mob',
                                    'menu_class' => 'drop-down-mob-m', 'container' => 'ul')); ?>
                                <div class="closed-mob-menu"><span>X</span></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
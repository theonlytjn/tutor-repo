<div id="footer" class="clearfix" role="contentinfo">

    <div class="row">

        <div class="large-6 medium-6 small-12 columns footer-section">

            <h5 class="footer-title">Footer Title 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut arcu lacus, viverra vel elit ut, maximus rhoncus velit. Suspendisse viverra ante nec massa pharetra, ut hendrerit dui ultrices.</p>

        </div>

        <div class="large-2 medium-2 small-12 columns footer-section">

            <h5 class="footer-title">Footer Title 2</h5>

            <?php if( have_rows('footer_links_one', 'options') ): ?>

            <ul>

                <?php while( have_rows('footer_links_one', 'options') ): the_row(); ?>

                <li>
                    <a href="<?php the_sub_field('link_url'); ?>">
                        <?php the_sub_field('link_name'); ?>
                    </a>
                </li>

                <?php endwhile; ?>
            </ul>

            <?php endif; ?>

        </div>

        <div class="large-2 medium-2 small-12 columns footer-section">

            <h5 class="footer-title">Footer Title 3</h5>

            <?php if( have_rows('footer_links_one', 'options') ): ?>

            <ul>

                <?php while( have_rows('footer_links_one', 'options') ): the_row(); ?>

                <li>
                    <a href="<?php the_sub_field('link_url'); ?>">
                        <?php the_sub_field('link_name'); ?>
                    </a>
                </li>

                <?php endwhile; ?>
            </ul>

            <?php endif; ?>


        </div>

        <div class="large-2 medium-2 small-12 columns footer-section">

            <h5 class="footer-title">Footer Title 4</h5>

            <?php if( have_rows('footer_links_three', 'options') ): ?>

            <ul>

                <?php while( have_rows('footer_links_three', 'options') ): the_row(); ?>

                <li>
                    <a href="<?php the_sub_field('link_url'); ?>">
                        <?php the_sub_field('link_name'); ?>
                    </a>
                </li>

                <?php endwhile; ?>
            </ul>

            <?php endif; ?>


        </div>

    </div>

</div>

<div id="bottom-footer" class="clearfix">

    <div class="row">

        <div class="large-12 medium-12 columns">

            <ul class="center-list-social">

                <?php if( get_field('social_facebook', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_instagram', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_twitter', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_linkedin', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_youtube', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_youtube', 'option'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_tiktok', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_tiktok', 'option'); ?>" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
                <?php endif; ?>

                <?php if( get_field('social_snapchat', 'option') ): ?>
                <li>
                    <a href="<?php the_field('social_snapchat', 'option'); ?>" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                </li>
                <?php endif; ?>

            </ul>


        </div>

    </div>

    <div class="row">

        <div class="large-12 medium-12 small-12 columns">
            <p class="source-org copyright text-center">&copy;
                <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>. All Rights Reserved</p>
        </div>

        <div class="large-12 medium-12 small-12 columns">
            <p class="source-org powered text-center">Crafted by <a target="_blank" href="http://www.tonyjnrnwachi.co.uk">TJN</a>.</p>
        </div>

    </div>

    <div class="smoothscroll-top">
        <span class="scroll-top-inner">
            <i class="fal fa-long-arrow-up"></i>
        </span>
    </div>

    <!-- end .main-content -->
</div>
<!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
</body>

</html>
<!-- end page -->

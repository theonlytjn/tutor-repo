<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="home-banner" class="clearfix">

        <div class="home-card">

            <div class="large-12 medium-12 small-12">

                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                    <div class="hide-for-small-only">

                        <?php $image = get_field('banner_image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>

                    <div class="show-for-small-only">

                        <?php $image = get_field('banner_image'); $size = 'article-thumb'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                    </div>

                    <div class="card-info">

                        <div class="img-box text-center">

                            <div class="content-holder">

                                <div class="large-12 medium-12 small-11 large-centered medium-centered small-centered columns">

                                    <p class="text-center text-spacing text-lower">
                                        <?php the_field('banner_text'); ?>
                                    </p>

                                    <div class="clear1"></div>

                                    <div class="hide-for-small-only">
                                        <h2 class="text-center">
                                            <?php the_field('banner_title'); ?>
                                        </h2>
                                    </div>

                                    <div class="show-for-small-only">
                                        <h4 class="text-center">
                                            <?php the_field('banner_title'); ?>
                                        </h4>
                                    </div>

                                    <div class="clear2"></div>

                                    <p class="text-center">
                                        <a class="button" href="<?php the_field('banner_button_link'); ?>">
                                            <?php the_field('banner_button_text'); ?>
                                        </a>
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <!-- To see additional archive styles, visit the /parts directory -->
                    <?php get_template_part( 'parts/loop', 'archive' ); ?>

                    <?php endwhile; ?>

                    <?php joints_page_navi(); ?>

                    <?php else : ?>

                    <?php get_template_part( 'parts/content', 'missing' ); ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

    <div id="secont-content" class="clearfix">

<div class="section-block">

</div>


    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>

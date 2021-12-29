<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-9 small-12 columns large-centered medium-centered">

                <div class="section-block">

                    <h2 class="text-center"><?php the_title(); ?></h2>

                </div>

            </div>

        </div>

    </div>

    <div id="our-company" class="clearfix">

        <div class="row align-middle expanded collapse">

            <div class="large-6 medium-6 small-12 columns">

                <?php $image = get_field('section_one_image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

            </div>

            <div class="large-6 medium-6 small-12 columns">

                <div class="large-9 medium-9 small-12 large-centered medium-centered columns">

                    <div class="clear2 show-for-small-only"></div>
                    <h3>
                        <?php the_field('section_one_title'); ?>
                    </h3>

                    <p>
                        <?php the_field('section_one_description'); ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div id="our-promise" class="clearfix">

        <div class="row align-middle expanded collapse">

            <div class="small-12 medium-6 medium-push-6 columns">

                <?php $image = get_field('section_two_image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

            </div>

            <div class="small-12 medium-6 medium-pull-6 columns">

                <div class="large-9 medium-9 small-12 large-centered medium-centered columns">

                    <div class="clear2 show-for-small-only"></div>
                    <h3>
                        <?php the_field('section_two_title'); ?>
                    </h3>

                    <p>
                        <?php the_field('section_two_description'); ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>

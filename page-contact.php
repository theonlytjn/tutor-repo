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

    <div id="main-contact" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-4 medium-4 small-12 columns">

                    <div class="callout">

                        <i class="fas fa-map-marker-alt"></i>

                        <h4 class="text-center text-caps">Address</h4>

                        <p class="text-center">9327 Prairie St. Grove City, OH 43123</p>

                    </div>

                </div>

                <div class="large-4 medium-4 small-12 columns">

                    <div class="callout">

                        <i class="fas fa-phone"></i>

                        <h4 class="text-center text-caps">Phone</h4>

                        <p class="text-center">+44 207 123 4567</p>

                    </div>

                </div>

                <div class="large-4 medium-4 small-12 columns">

                    <div class="callout">

                        <i class="far fa-envelope"></i>

                        <h4 class="text-center text-caps">Email</h4>

                        <p class="text-center">info@domain.com</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="main-contact-info" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns">

                    <h4>Contact Info</h4>

                    <p>Have a project or an idea you’d like to collaborate with Us? Let’s get in touch!</p>

                    <p><i class="fal fa-phone"></i>: 9327 Prairie St. Grove City, OH 43123</p>
                    <p><i class="fal fa-envelope"></i>: +44 207 123 4567</p>
                    <p><i class="fal fa-map-marked-alt"></i>: info@domain.com</p>

                </div>

                <div class="large-6 medium-6 small-12 columns">

                    <h4>Contact Form</h4>

                    <p>* All fields marked with a asterisk are required</p>

                    <?php echo do_shortcode('[ninja_form id=1]'); ?>

                </div>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'page' ); ?>

                    <?php endwhile; endif; ?>

                </div>

                <div class="large-6 medium-6 small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'page' ); ?>

                    <?php endwhile; endif; ?>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>

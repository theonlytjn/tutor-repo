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

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'page' ); ?>

                    <?php endwhile; endif; ?>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>

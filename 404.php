<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="row">

        <div id="main" class="large-8 medium-8 columns" role="main">

            <article id="content-not-found">

                <header class="article-header">
                    <h1 class="text-center"><?php _e( 'Oops! That page can’t be found.', 'jointswp' ); ?></h1>
                </header> <!-- end article header -->

                <section class="entry-content">
                    <p class="text-center"><?php _e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'jointswp' ); ?></p>
                </section> <!-- end article section -->

                <section class="search">
                    <p class="text-center"><?php get_search_form(); ?></p>
                </section> <!-- end search section -->

            </article> <!-- end article -->

        </div> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>

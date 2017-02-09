<?php get_header(); ?>

    <?php // The Query
    $the_query = new WP_Query( array( 'post_type' => 'PRESENTATION' ) );

    if ( $the_query->have_posts() ) { ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div id="presentation">
            <div class="container">
                <div class="content">
                    <?php the_content(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php bloginfo( 'description' ); ?></p>
                </div>
                <div class="scroll-bot">

                </div>
            </div>
        </div>
        <?php endwhile; } ?>

<?php get_footer(); ?>

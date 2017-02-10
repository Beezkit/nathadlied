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
                    <div class="icon-down"></div>
                </div>
            </div>
        </div>
        <?php endwhile; } ?>

        <div id="nath">
            <div class="container">
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'Nath' ) );

                if ( $the_query->have_posts() ) { ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; } ?>
            </div>
        </div>

        <div id="print">
            <div class="container">
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'Print' ) );

                if ( $the_query->have_posts() ) { ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; } ?>
            </div>
        </div>

<?php get_footer(); ?>

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

                <?php $competences= get_field('competence');
            		if( $competences ):  ?>
                    <ul class="competences">
            		  <?php foreach( $competences as $competence ): ?>
            		  <li>
                          <h4><?php echo $competence['titre']; ?> :</h4>
                          <div class="width<?php echo $competence['pourcentage']; ?>"></div>
                      </li>
            		  <?php endforeach; ?>
                    </ul>
            	<?php endif; ?>

            </div>
        </div>

        <div id="print">
            <div class="container">
                <?php // The Query
                $the_query = new WP_Query( array( 'post_type' => 'Print', 'post_per_page' => '4' ) );
                if ( $the_query->have_posts() ) { ?>
                <h2>Print</h2>
                <span class="border-title"></span>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="content col-lg-8 offset-lg-2">
                        <div class="col-lg-6 thumbnail">
                            <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="col-lg-6 description">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="more" title="En savoir plus">En savoir plus <span class="right"></span></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                <?php endwhile; } ?>

                <?php
                    // Get the ID of a given category
                    $category_id = get_cat_ID( 'print' );

                    // Get the URL of this category
                    $category_link = get_category_link( $category_id );
                ?>

                <div class="text-center">
                    <a href="<?php echo esc_url( $category_link ); ?>" class="more-all" title="Voir tout les portfolio">Voir tout les print</a>
                </div>

                <?php wp_reset_postdata(); ?>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 100 10 0 10" />
            </svg>
        </div>

        <div id="web">
            <div class="container">
                <h2>Web</h2>
                <span class="border-title"></span>
            </div>
        </div>

<?php get_footer(); ?>

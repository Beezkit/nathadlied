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

                <div class="text-center">
                    <a href="<?php echo get_page_link(9); ?>" class="more-all" title="Voir tout les portfolio">Voir tout les print</a>
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
                <div class="row">
                    <?php // The Query
                    $the_query = new WP_Query( array( 'post_type' => 'Web', 'post_per_page' => '6' ) );
                    if ( $the_query->have_posts() ) { ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-6 col-lg-4">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="thumbnail">
                                    <?php the_post_thumbnail('web', array('class' => 'img-fluid')); ?>
                                    <div class="description">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="read-more text-center">
                                        <span class="more">Voir le projet</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; } ?>
                        <div class="clearfix"></div>
                </div>

                <?php wp_reset_postdata(); ?>

                <div class="text-center">
                    <a href="<?php echo get_page_link(37); ?>" class="more-all" title="Voir tout les portfolio">Voir tout les web</a>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
